<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonateRequest;
use App\Models\Donate;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DonateController extends Controller
{
    protected $donate;
    protected $transaction;

    public function __construct(Donate $donate, Transaction $transaction)
    {
        $this->donate = $donate;
        $this->transaction = $transaction;
    }

    public function index()
    {
        $donates = $this->donate->all();
        return view('pages.donate', compact('donates'));
    }

    public function store(DonateRequest $request)
    {
        $donationAmount = $this->determineDonationAmount($request);

        DB::transaction(function () use ($request, $donationAmount) {
            $transaction = $this->createTransaction($request, $donationAmount);
            $this->updateDonation($transaction);
        });

        return redirect()->route('success');
    }

    protected function determineDonationAmount(DonateRequest $request)
    {
        switch ($request->input('donate_option')) {
            case 'option1':
                return 10000;
            case 'option2':
                return 20000;
            case 'option3':
                return 30000;
            default:
                return $request->input('custom_amount');
        }
    }

    protected function createTransaction(DonateRequest $request, $amount)
    {
        return $this->transaction->create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'donate_id' => $request->input('products_id'),
            'donate_price' => $amount,
            'description' => 'Donation'
        ]);
    }

    protected function updateDonation(Transaction $transaction)
    {
        $donate = $this->donate->find($transaction->donate_id);

        Log::info('Current price before update: ' . $donate->current_price);
        Log::info('Transaction price: ' . $transaction->donate_price);

        $donate->current_price = $donate->transactions()->sum('donate_price');

        Log::info('Current price after update: ' . $donate->current_price);

        if ($donate->current_price > $donate->goal_price) {
            $donate->current_price = $donate->goal_price;
        }

        $donate->save();
    }

    public function success()
    {
        return view('pages.success');
    }
}
