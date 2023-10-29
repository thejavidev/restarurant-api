<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
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
            'src_2'=>'nullable|image',
            'src_alt'=>'nullable|max:255',
            'src_alt_2'=>'nullable|max:255',
            'about_az'=>'nullable|max:50000',
            'about_en'=>'nullable|max:50000',
            'about_ru'=>'nullable|max:50000',

        ];
    }

    public function attributes()
    {
        return [
            'src'=>'nullable|image',
            'src_2'=>'nullable|image',
            'src_alt'=>'nullable|max:255',
            'src_alt_2'=>'nullable|max:255',
            'about_az'=>'nullable|max:50000',
            'about_en'=>'nullable|max:50000',
            'about_ru'=>'nullable|max:50000',
        ];
    }
}
