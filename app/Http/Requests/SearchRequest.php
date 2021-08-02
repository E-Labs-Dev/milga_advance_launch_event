<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'code_doctor'  =>'required|exists:registrations,user_code',
        ];
    }
    public function messages()
    {
        return [
            'code_doctor.required'=>'This code is invalid.',
            'code_doctor.exists'=>'This code is invalid.',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        if( $validator->fails() ) {
            return back()->with('info',$validator->errors()->first())->withInput();
        }
    }
}
