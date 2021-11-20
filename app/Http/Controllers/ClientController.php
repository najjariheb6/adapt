<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $clients = Client::all();

        return view('layouts.dashbord.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashbord.client.createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $clients = new Client([
          'nom_client' => $request->get('nom_client'),
          'numero_tel' => $request->get('numero_tel'),
          'email_client' => $request->get('email_client'),
          'adress_client' => $request->get('adress_client'),
        ]);

        $clients->save();
        
        return redirect('/client');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $clients= Client::find($id);
        return view('layouts.dashbord.client.editeClient',compact('clients','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $clients = Client::find($id);
        $clients->nom_client = $request->get('nom_client');
        $clients->numero_tel = $request->get('numero_tel');
        $clients->email_client = $request->get('email_client');
        $clients->adress_client = $request->get('adress_client');
        $clients->save();
        return redirect('/client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $clients = Client::find($id);
      $clients->delete();

      return redirect('/client');
    }
}
