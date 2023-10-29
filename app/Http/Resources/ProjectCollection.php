<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectCollection extends JsonResource
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
            'src'=>$this->src ? asset('files/products/'.$this->src) : null,
            'alt'=>$this->alt,
            'title_az'=>$this->title_az,
            'title_ru'=>$this->title_ru,
            'title_en'=>$this->title_en,
            'big_text_az'=>$this->big_text_az,
            'big_text_ru'=>$this->big_text_ru,
            'big_text_en'=>$this->big_text_en,
        ];
    }
}
