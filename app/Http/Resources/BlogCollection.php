<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;


class BlogCollection extends JsonResource

{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public function toArray($request)

    {

        return [
            'id'=>$this->id,
            'src'=>$this->src ? asset('files/blog/'.$this->src) : null,
            'src_big'=>$this->src_big ? asset('files/blog/'.$this->src_big) : null,
            'slug'=>Str::slug($this->blog_date_en),
            'blog_date_az'=>$this->blog_date_az,
            'blog_date_ru'=>$this->blog_date_ru,
            'blog_date_en'=>$this->blog_date_en,
            'blog_title_az'=>$this->blog_title_az,
            'blog_title_ru'=>$this->blog_title_ru,
            'blog_title_en'=>$this->blog_title_en,
            'blog_text_az'=>$this->blog_text_az,
            'blog_text_ru'=>$this->blog_text_ru,
            'blog_text_en'=>$this->blog_text_en,
        ];
    }
}
