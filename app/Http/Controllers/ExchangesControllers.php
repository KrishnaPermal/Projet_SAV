<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use App\ExchangesModel;
use App\ExchangesTypesModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExchangesControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ajouter = "";
        $clients = ClientsModel::all();
        $exchange_types = ExchangesTypesModel::all();
        $exchanges = ExchangesModel::all();
        $operateurs = User::all();
        return view('clients.exchange', [
            'clients' => $clients, 'exchange_types' => $exchange_types, 'operateurs' => $operateurs, 'exchanges' => $exchanges, 'ajouter' => $ajouter        
            ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        
        $clients = ClientsModel::all();
        $exchange_types = ExchangesTypesModel::all();
        $exchanges = ExchangesModel::all();
        $operateurs = User::all();
        $validateData = Validator::make(  //verifie les informations vis-a-vis de la BDD
            $request->all(),
            [
                'commentaire' => 'required', //"required" -> ce champs est obligatoire
                'date' => 'required',
                'id_users' => 'required',
                'id_clients' => 'required',
                'id_exchange_types' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate(); 

        $data = ExchangesModel::create(
            $validateData
        )->save();
        
        if($validateData){
            $ajouter = "L'Échange à bien été ajouter dans la Base de donnée";
        }
        else {
            $ajouter = "";
        }
        
        return view('clients.exchange', [
            'clients' => $clients, 'exchange_types' => $exchange_types, 'operateurs' => $operateurs, 'exchanges' => $exchanges, 'ajouter' => $ajouter,  
                    
                    ]);
 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $exchanges = ExchangesModel::where('id_clients', "=", $id)->get();
        return ($exchanges);
    }

  
}
