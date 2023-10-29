<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionCollection extends JsonResource
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
            'q_text1_az'=>$this->q_text1_az,
            'q_text1_ru'=>$this->q_text1_az,
            'q_text1_en'=>$this->q_text1_en,
            'q_text2_az'=>$this->q_text2_az,
            'q_text2_ru'=>$this->q_text2_ru,
            'q_text2_en'=>$this->q_text2_en,
        ];
    }
}
