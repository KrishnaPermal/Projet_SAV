<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = 'clients'; /*Définit le nom de la table*/
    protected $fillable = ['nom', 'prenom'];
    public $timestamps= false;

    public function exchanges()
    {
        return $this->hasMany('App\ExchangesModel');
    }
}
