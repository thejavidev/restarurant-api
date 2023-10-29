<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSimpleRequest extends FormRequest
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
            'src'=>'nullable|image',
            'text_1_az'=>'nullable|max:255',
            'text_1_ru'=>'nullable|max:255',
            'text_1_en'=>'nullable|max:255',
            'text_2_az'=>'nullable|max:255',
            'text_2_ru'=>'nullable|max:255',
            'text_2_en'=>'nullable|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'src'=>'Cover',
            'text_1_az'=>'Name(AZ)',
            'text_1_ru'=>'Name(RU)',
            'text_1_en'=>'Name(EN)',
            'text_2_az'=>'Name(AZ)',
            'text_2_ru'=>'Name(RU)',
            'text_2_en'=>'Name(EN)'
        ];
    }
}
