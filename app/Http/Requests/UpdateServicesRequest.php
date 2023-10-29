<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicesRequest extends FormRequest
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
            'slug'=>'nullable|max:255',
            'name_az'=>'nullable|max:2000',
            'name_ru'=>'nullable|max:2000',
            'name_en'=>'nullable|max:2000',
        ];
    }

    public function attributes()
    {
        return [
            'slug'=>'Slug',
            'name_az'=>'Name(Az)',
            'name_ru'=>'Name(Ru)',
            'name_en'=>'Name(En)',
        ];
    }
}
