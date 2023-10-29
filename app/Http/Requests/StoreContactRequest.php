<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'site_type'=>'required|max:255',
            'full_name'=>'required|max:255',
            'tel'=>'required|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'site_type'=>__('contact.site_type'),
            'full_name'=>__('contact.full_name'),
            'tel'=>__('contact.tel')
        ];
    }
}
