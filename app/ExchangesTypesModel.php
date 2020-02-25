<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesTypesModel extends Model
{
    protected $table = 'exchanges_types'; /*Définit le nom de la table*/
    protected $fillable = ['id','type'];
    public $timestamps= false;

    public function exchanges()
    {
        return $this->hasMany('App\ExchangesModel');
    }
}
