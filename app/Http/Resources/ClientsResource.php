<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}


/* <?php

namespace App\Http\Resources; 

use Illuminate\Http\Resources\Json\JsonResource;

class ClientsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     *
    public function toArray($request)
    {
        $type = new ClientsRessource($this->type); // Ici nous utilisons cette méthode pour envoyer un seul "array"
    }
} */