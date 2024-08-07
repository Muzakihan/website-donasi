<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Jobs\SendEmailJob;
use App\Models\Donate;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonateController extends Controller
{
    public function index()
    {
        $donates = Donate::where('status', 'pending')->get();

        return view('pages.donate', compact('donates'));
    }

    public function store(TransactionRequest $request)
    {
        $data = $request->all();

        $countryCode = preg_replace('/^\++/', '', $request->country_code ?? '');
        $phone_number = $request->phone_number ?? '';

        if ($phone_number && $countryCode) {
            if (substr($phone_number, 0, 1) === '0') {
                $fullPhoneNumber = '+' . preg_replace('/[^0-9]/', '', $countryCode . substr($phone_number, 1));
            } else {
                $fullPhoneNumber = '+' . preg_replace('/[^0-9]/', '', $countryCode . $phone_number);
            }
        } else {
            $fullPhoneNumber = null;
        }

        unset($data['country_code']);

        if ($request->donate_price === 'custom') {
            $data['donate_price'] = preg_replace('/[^0-9]/', '', $request->custom_amount);
        } else {
            $data['donate_price'] = $request->donate_price;
        }

        $donate = Donate::findOrFail($data['donate_id']);
        DB::transaction(function () use ($donate, $data) {
            if ($donate->current_price !== null) {
                $donate->current_price += $data['donate_price'];
            } else {
                $donate->current_price = $data['donate_price'];
            }
        });


        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => uniqid(),
                'gross_amount' => $data['donate_price'],
            ),

            'customer_details' => array(
                'username' => $data['username'],
                'email' => $data['email'],
                'phone_number' => $fullPhoneNumber,
                'hope_for_foundation' => $data['hope_for_foundation'],
                'hope_for_you' => $data['hope_for_you'],
            ),

            'callbacks' => array(
                'finish' => route('finish'),
            )
        );



        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            session([
                'transaction_data' => [
                    'donate_id' => $data['donate_id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'phone_number' => $fullPhoneNumber,
                    'hope_for_foundation' => $data['hope_for_foundation'],
                    'hope_for_you' => $data['hope_for_you'],
                    'donate_price' => $data['donate_price'],
                    'snap_token' => $snapToken
                ]
            ]);

            return response()->json([
                'snap_token' => $snapToken
            ]);
        } catch (\Exception $e) {
            return back()->withError('Terjadi kesalahan saat membuat transaksi pembayaran: ' . $e->getMessage());
        }
    }

    public function finish(Request $request)
    {
        $transactionData = session('transaction_data');

        try {
            Transaction::create($transactionData);

            $donate = Donate::findOrFail($transactionData['donate_id']);
            $donate->current_price = ($donate->current_price ?? 0) + $transactionData['donate_price'];
            $donate->save();

            SendEmailJob::dispatch($transactionData);

            session()->forget('transaction_data');

            return redirect()->route('success');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Terjadi kesalahan saat memproses transaksi: ' . $e->getMessage());
        }
    }

    public function success()
    {
        return view('pages.success');
    }
}
