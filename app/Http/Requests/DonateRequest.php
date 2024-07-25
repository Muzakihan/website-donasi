<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'donate_id' => 'required|exists:donates,id',
            'donate_price' => 'required|numeric|min:10000',
            'custom_amount' => 'nullable|numeric|min:10000'
        ];
    }
}
