<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $tickets = Ticket::all();
        return view('layouts.dashbord.ticket.index', compact('clients', 'tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();

        return view('layouts.dashbord.ticket.createTicket', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients = Client::all();
        $ticket = new Ticket([
            'produit' => $request->get('produit'),
            'marque' => $request->get('marque'),
            'n°série' => $request->get('n°série'),
            'mode' => $request->get('mode'),
            'description_panne' => $request->get('description_panne'),
            'accesoires_machine' => $request->get('accesoires_machine'),
            'etat_machine' => $request->get('etat_machine'),
            'references' => Str::random(8),
            'status' => 'an_cours',
            'client_id' => $request->get('client_id')
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
        $clients = Client::all();
        $tickets = Ticket::find($id);
        return view('layouts.dashbord.ticket.detail_Ticket', compact('clients', 'id', 'tickets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::all();
        $tickets = Ticket::find($id);
        return view('layouts.dashbord.ticket.editeTicket', compact('tickets', 'id', 'clients'));
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
        $clients = Client::all();
        $tickets = Ticket::find($id);
        $tickets->produit = $request->get('produit');
        $tickets->marque = $request->get('marque');
        $tickets->n°série = $request->get('n°série');
        $tickets->description_panne = $request->get('description_panne');
        $tickets->accesoires_machine = $request->get('accesoires_machine');
        $tickets->etat_machine = $request->get('etat_machine');
        $tickets->client->nom_client = $request->get('nom_client');


        $tickets->save();
        session()->flash('success', 'Le ticket a été bien modifier');
        return redirect('/ticket');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return redirect('/ticket');
    }





    // public function storeClient(Request $request)
    // {
    //      $clients = new Client([
    //       'nom_client' => $request->get('nom_client'),
    //       'numero_tel' => $request->get('numero_tel'),
    //       'email_client' => $request->get('email_client'),
    //       'adress_client' => $request->get('adress_client'),
    //     ]);

    //     $clients->save();

    //     return redirect('/ticket');
    // }


};
