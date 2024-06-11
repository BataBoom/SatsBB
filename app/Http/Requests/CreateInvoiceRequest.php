<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateInvoiceRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'invoice_no' => 'required|string',
            'amount' => 'required|numeric|between:0.01,9999.99',
            'ip' => 'required|ip',
            'duration' => 'required|string'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => false, 'errors' => $validator->errors()->all()], 422));
    }

    public function messages()
    {
        return [
            'user_id' => "User ID not found",
            'invoice_no.required' => 'Invoice id not found',
            'amount' => 'Amount must be numeric and between 0.01 and 9999.99',
            'ip' => 'IP address not found',
            'duration' => 'Duration not specified',
        ];
    }


}
