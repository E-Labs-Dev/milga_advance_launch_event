<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
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
            'question_1'  =>'required|max:500',
            'question_2'  =>'required|max:500',
            'question_3'  =>'required|max:500',
            'question_4'  =>'required|max:500',
            'question_5'  =>'required|max:500',
            'question_6'  =>'required|max:500',
            'question_7'  =>'required|max:500',
            'question_8'  =>'required|max:500',
            'question_9'  =>'required|max:500',
            'question_10'  =>'required|max:500',
            'question_11'  =>'required|max:500',
            'question_12'  =>'required|max:500',
            'question_13'  =>'required|max:500',
            'question_14'  =>'required|max:500',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if( $validator->fails() ) {
            return back()->with('info',$validator->errors()->first());
        }
    }
}
