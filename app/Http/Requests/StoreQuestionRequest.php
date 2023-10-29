<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'q_text1_az'=>'nullable|max:255',
            'q_text1_en'=>'nullable|max:255',
            'q_text1_ru'=>'nullable|max:255',
            'q_text2_az'=>'nullable|max:30000',
            'q_text2_ru'=>'nullable|max:30000',
            'q_text2_en'=>'nullable|max:30000',
        ];
    }

    public function attributes()
    {
        return [

            'q_text1_az'=>'Question1(AZ)',
            'q_text1_en'=>'Question1(EN)',
            'q_text1_ru'=>'Question1(RU)',
            'q_text2_az'=>'Question2(AZ)',
            'q_text2_ru'=>'Question2(RU)',
            'q_text2_en'=>'Question2(EN)'
        ];
    }
}
