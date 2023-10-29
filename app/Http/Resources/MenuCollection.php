<?php

namespace App\Http\Resources;
use App\Http\Resources\ServicesCollection;

use App\Models\Services;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuCollection extends JsonResource
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
            'src'=>$this->src ? asset('files/menu/'.$this->src) : null,
            'src_big'=>$this->src_big ? asset('files/menu/'.$this->src_big) : null,
//            'service_id'=>$this->service_id,
            'slug'=>Services::orderBy('id', 'desc')->where('id', $this->service_id)->pluck('slug')[0],
            'name_az'=>Services::orderBy('id', 'desc')->where('id', $this->service_id)->pluck('name_az')[0],
            'name_en'=>Services::orderBy('id', 'desc')->where('id', $this->service_id)->pluck('name_en')[0],
            'name_ru'=>Services::orderBy('id', 'desc')->where('id', $this->service_id)->pluck('name_ru')[0],
            'menu_date_az'=>$this->menu_date_az,
            'menu_date_ru'=>$this->menu_date_ru,
            'menu_date_en'=>$this->menu_date_en,
            'menu_title_az'=>$this->menu_title_az,
            'menu_title_ru'=>$this->menu_title_ru,
            'menu_title_en'=>$this->menu_title_en,
            'menu_text_az'=>$this->menu_text_az,
            'menu_text_ru'=>$this->menu_text_ru,
            'gram'=>$this->gram,
            'price'=>$this->price,
            'protein'=>$this->protein,
            'oils'=>$this->oils,
            'carbohydrates'=>$this->carbohydrates,
            'kcal'=>$this->kcal,
        ];
    }
}
