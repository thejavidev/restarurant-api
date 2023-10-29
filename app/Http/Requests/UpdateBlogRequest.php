<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            'blog_date_az'=>'nullable|max:255',
            'blog_date_ru'=>'nullable|max:255',
            'blog_date_en'=>'nullable|max:255',
            'blog_title_az'=>'nullable|max:255',
            'blog_title_ru'=>'nullable|max:255',
            'blog_title_en'=>'nullable|max:255',
            'blog_text_az'=>'nullable|max:20000',
            'blog_text_ru'=>'nullable|max:20000',
            'blog_text_en'=>'nullable|max:20000',
        ];
    }

    public function attributes()
    {
        return [
            'src'=>'Cover',
            'src_big'=>'Inner Picture',
            'blog_date_az'=>'Date(AZ)',
            'blog_date_ru'=>'Date(RU)',
            'blog_date_en'=>'Date(EN)',
            'blog_title_az'=>'Title(AZ)',
            'blog_title_ru'=>'Title(RU)',
            'blog_title_en'=>'Title(EN)',
            'blog_text_az'=>'Text(AZ)',
            'blog_text_ru'=>'Text(RU)',
            'blog_text_en'=>'Text(EN)'
        ];
    }
}
