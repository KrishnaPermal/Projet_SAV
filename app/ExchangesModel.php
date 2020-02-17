<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesModel extends Model
{
    protected $table = 'exchanges'; /*Définit le nom de la table*/
    protected $fillable = [ 'commentaire'];
   

   

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

