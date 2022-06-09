<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class tableListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // dd($this);
        return [
            'id' => $this->id,
            'style' => $this->style,
            'background' => 'test',
            'text' => $this->text,
            'children' => self::collection($this->whenLoaded('children'))
        ];
    }
}
