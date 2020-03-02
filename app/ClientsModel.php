<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = 'clients'; /*Définit le nom de la table*/
    protected $fillable = ['id', 'nom', 'prenom', 'tel', 'email'];
    public $timestamps= false;

    public function client()
    {
        return $this->hasMany('App\ExchangesModel');
    }
}
