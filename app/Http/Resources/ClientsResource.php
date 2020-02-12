<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class ClientsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    
        $type = new ClientsRessource($this->type); // Ici nous utilisons cette méthode pour envoyer un seul "array"

        //Formatage des données
        return [
            'id'=>$this->id,
            'nom'=>$this->nom,
            'prenom'=>$this->prenom,
            'tel'=>$this->tel,
            'email'=>$this->email,
        ];
    }
}
