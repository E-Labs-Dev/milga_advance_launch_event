<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class GameRequest extends FormRequest
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
            'userCode'     =>'required|exists:registrations,user_code',
            'gameCode'     =>'required|exists:game_references,code',
            'gameScore'    =>'required',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $response = response()->json(['error' => $validator->errors()->all()], 422);
        throw new HttpResponseException($response);
    }
}
