<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuRequest extends FormRequest
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
            'src_big'=>'nullable|image',

            'menu_date_az'=>'nullable|max:255',
            'menu_date_ru'=>'nullable|max:255',
            'menu_date_en'=>'nullable|max:255',
            'menu_title_az'=>'nullable|max:255',
            'menu_title_ru'=>'nullable|max:255',
            'menu_title_en'=>'nullable|max:255',
            'menu_text_az'=>'nullable|max:20000',
            'menu_text_ru'=>'nullable|max:20000',
            'menu_text_en'=>'nullable|max:20000',
            'price'=>'nullable|max:255',
            'gram'=>'nullable|max:255',
            'protein'=>'nullable|max:255',
            'oils'=>'nullable|max:255',
            'carbohydrates'=>'nullable|max:255',
            'kcal'=>'nullable|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'src'=>'Cover',
            'src_big'=>'Inner Picture',

            'menu_date_az'=>'Date(AZ)',
            'menu_date_ru'=>'Date(RU)',
            'menu_date_en'=>'Date(EN)',
            'menu_title_az'=>'Title(AZ)',
            'menu_title_ru'=>'Title(RU)',
            'menu_title_en'=>'Title(EN)',
            'menu_text_az'=>'Text(AZ)',
            'menu_text_ru'=>'Text(RU)',
            'menu_text_en'=>'Text(EN)',
            'price'=>'Price',
            'gram'=>'Gram',
            'protein'=>'Protein',
            'oils'=>'Oils',
            'carbohydrates'=>'Carbohydrates',
            'kcal'=>'Kcal',
        ];
    }
}
