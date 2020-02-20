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

        $clients = ClientsModel::all();

        //type
        //user
        
        return view('clients.clients', [
            'clients' => $clients,
        ]); 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $exchange_types = ExchangesTypesModel::all();
        // return view('clients.exchange')->with('operateur', $operateur)->with('exchange_types', $exchange_types);;


        //recupère tous les données clients 

        $clients = ClientsModel::all();

        
        //recupère tous les données users
        
        $operateurs= User::all();
        $tableau = [
        'exchange_types' =>$exchange_types,
        'operateurs' =>$operateurs,
        'clients'=>$clients
        ];
            return view('clients.exchange',$tableau);


    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ExchangesValidate = Validator::make(
        $request->input(),
             [
               'type' => 'required',
               'commentaire' => 'required',
                'id_users' => 'required',
               'id_clients' => 'required',
               'id_exchange_types' => 'required',
             ],
            
             [
               'required' => 'Le champs :attribute est requis', 
           ]
       )->validate();

         $addExchanges = ExchangesModel::create($ExchangesValidate);
             return $ExchangesValidate;
    }










    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
