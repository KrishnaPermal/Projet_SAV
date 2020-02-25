<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesModel extends Model
{
    protected $table = 'exchanges'; /*Définit le nom de la table*/
    protected $fillable = ['id','date','commentaire','id_users','id_clients','id_exchange_types',];
    public $timestamps = false;

   

    public function client()
    {
        return $this->belongsTo('App\ClientsModel');
    }

    public function exchangeType()
    {
        return $this->belongsTo('App\ExchangesTypesModel');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

