<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ticket;
use App\Client;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('layouts.dashbord.ticket.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
       
         return view('layouts.dashbord.ticket.createTicket',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ticket = new Ticket([
          'produit' => $request->get('produit'),
          'marque' => $request->get('marque'),
          'n°série' => $request->get('n°série'),
          'description_panne' => $request->get('description_panne'),
          'accesoires_machine' => $request->get('accesoires_machine'),
          'etat_machine' => $request->get('etat_machine'),
          'url' => $request->get('url')
        ]);

        $ticket->save();
        
        return redirect('/ticket');
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
         $ticket= Ticket::find($id);
      $ticket->delete();

      return redirect('/ticket');
    }
    public function storeClient(Request $request)
    {
         $clients = new Client([
          'nom_client' => $request->get('nom_client'),
          'numero_tel' => $request->get('numero_tel'),
          'email_client' => $request->get('email_client'),
          'adress_client' => $request->get('adress_client'),
        ]);

        $clients->save();
        
        return redirect('/ticket');
    }
    
    
};

