<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name'=>'required',
            'email' => 'required|email',
            'phone' => 'required|string|max:15|regex:/[0-9]/',
            'address' => 'required|min:10',
            'amount' => 'required',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'email.required'  => 'Email không được để trống',
            'phone.required' => 'Số điện thoại không được để  trống',
            'address.required' => 'Địa chỉ không được để  trống',
            'email.email' => 'Email chưa đúng định dạng',
            'phone.regex' => 'Số điện thoại chưa đúng định dạng',
            'phone.max' => 'Số  điện thoại không đúng định dạng',
            'address.min' => 'Địa chỉ quá ngắn',
        ];
    }
}
