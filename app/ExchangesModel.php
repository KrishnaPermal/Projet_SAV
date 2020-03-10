<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesModel extends Model
{
    protected $table = 'exchanges'; /*Définit le nom de la table*/
    protected $fillable = ['id','date','commentaire','id_users','id_clients','id_exchange_types'];
    public $timestamps = false;


    public function client()
    {
        return $this->belongsTo(ClientsModel::class,'id_clients');
    }

    public function exchangeType()
    {
        return $this->belongsTo(ExchangesTypesModel::class,'id_exchange_types');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_users');
    }
}

