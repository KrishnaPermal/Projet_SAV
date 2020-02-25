<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExchangesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
     
        //Formatage des données
        
        $types = new ExchangesTypesResource($this->whenLoaded('exchange'));
        return [
            'id' => $this->id,
            'date' => $this->date,
            'commentaire' => $this->commentaire,
            'exchange' => $types,
        ];
    }
}
