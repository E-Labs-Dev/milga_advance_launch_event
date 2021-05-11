<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class RegistrationRequest extends FormRequest
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
            'first_name'   =>'required|string|max:190',
            'last_name'    =>'required|string|max:190',
            'email'        =>'required|email|unique:registrations,email|max:190',
            'phone'        =>'required|unique:registrations,phone|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'specialty_id' =>'required|exists:specialties,id',
            'venue_id'     =>'required|exists:venues,id',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if( $validator->fails() ) {
            return redirect()->route('home')->with('info',$validator->errors()->first())->withInput();
        }
    }
}
