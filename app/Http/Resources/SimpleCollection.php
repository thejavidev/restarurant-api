<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SimpleCollection extends JsonResource
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
            'src'=>$this->src ? asset('files/simple/'.$this->src) : null,
            'text_az'=>$this->text_2_az,
            'text_ru'=>$this->text_2_ru,
            'text_en'=>$this->text_2_en,
        ];
    }
}
