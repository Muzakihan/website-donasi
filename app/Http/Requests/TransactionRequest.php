<?php
// app/Http/Requests/TransactionRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'products_id' => 'required|exists:products,id',
            'donate_price' => 'required|numeric|min:10000',
        ];
    }
}
