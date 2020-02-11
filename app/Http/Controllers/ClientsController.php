<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use Illuminate\Http\Request;

class clientsController extends Controller
{
     /**
     * Function recuperations de tous les données client

     * @return retourne les Clients entrée en BDD
     */
    public function index()
    {
        //recupère toutes les données clients
        $clients = ClientsModel::all();

        return ($clients);

    }
}


