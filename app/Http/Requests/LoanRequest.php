<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'loan_amount' => 'required',
            'tenor' => 'required',
            'loan_amount' => 'required',
            'repayment_cycle' => 'required',
            'payment_source' => 'required',
            'account_no' => 'required',
            'account_name' => 'required',
            'bank_name' => 'required',
            'signature' => 'image'
        ];
    }
}
