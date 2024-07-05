<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonateRequest;
use App\Http\Requests\TransactionRequest;
use App\Models\Donate;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DonateController extends Controller
{
    public function index()
    {
        $donates = Donate::all();

        return view('pages.donate', compact('donates'));
    }

    public function store(TransactionRequest $request)
    {
        $data = $request->all();

        if ($request->donate_price === 'custom') {
            $data['donate_price'] = preg_replace('/[^0-9]/', '', $request->custom_amount);
        } else {
            $data['donate_price'] = $request->donate_price;
        }

        $donates = Donate::findOrFail($data['donate_id']);

        if ($donates->current_price !== null) {
            $donates->current_price += $data['donate_price'];
        } else {
            $donates->current_price = $data['donate_price'];
        }

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['donate_price'],
            ),

            'customer_details' => array(
                'first_name' => $data['username'],
                'email' => $data['email'],
            ),

            'callbacks' => array(
                'finish' => route('callback'),
            )
        );

        try {
            $snapToken = \Midtrans\Snap::createTransaction($params);

            session([
                'transaction_data' => [
                    'donate_id' => $data['donate_id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'donate_price' => $data['donate_price'],
                    'snap_token' => $snapToken->token
                ]
            ]);

            return redirect()->away($snapToken->redirect_url);

            return redirect()->route('donate.index', compact('snapToken'));
        } catch (\Exception $e) {
            return back()->withError('Terjadi kesalahan saat membuat transaksi pembayaran: ' . $e->getMessage());
        }
    }

    public function callback(Request $request)
    {
        $transactionData = session('transaction_data');
        try {
            // Process the transaction data
            Transaction::create($transactionData);

            // Clear the session data
            session()->forget('transaction_data');

            // return json_encode($request->all() + $transactionData);

            return redirect()->route('success');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Terjadi kesalahan saat memproses transaksi: ' . $e->getMessage());
        }
    }
}
