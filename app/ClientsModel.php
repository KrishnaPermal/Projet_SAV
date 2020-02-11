<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = 'clients'; /*Définit le nom de la table*/
    public $timestamps= false;
}
