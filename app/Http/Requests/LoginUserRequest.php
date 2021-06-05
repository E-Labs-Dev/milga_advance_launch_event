<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'number_phone'  =>'required|exists:registrations,phone|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|phone:AUTO',
        ];
    }

    public function messages()
    {
       return [
           'number_phone.required'=>'Please enter a valid mobile number.',
           'number_phone.exists'=>'Please enter a valid mobile number.',
       ];
    }
}
