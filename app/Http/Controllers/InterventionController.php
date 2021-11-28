<?php

namespace App\Http\Controllers;

use App\Client;
use App\Intervention;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function new(Request $request)
    {
        // $intervention = new Intervention([
        //     'product_name' => $request->get('name'),
        //     'product_ref' => $request->get('ref'),
        //     'product_ref' => $request->get('price'),
        //     'quantity' => $request->get('quantity'),
        //     'subtotal' => $request->get('subtotal'),
        //     'tva' => $request->get('tva'),
        //     'timbre' => $request->get('timbre'),
        //     'net_a_payer' => $request->get('net_a_payer'),
        //     'discount' => $request->get('discount'),
        //     'diagnostic' => $request->get('diagnostic'),
        //     'ticket_id' => $request->get('ticket_id'),
        // ]);
        $data=$request->all();
        $intervention = new Intervention();
        $intervention->product_name = $data['name'];
        $intervention->product_ref = $data['ref'];
        $intervention->product_ref = $data['price'];
        $intervention->quantity = $data['qte'];
        $intervention->subtotal = $data['subtotal'];
        $intervention->tva = $data['tax'];
        $intervention->timbre = $data['timbre'];
        $intervention->net_a_payer = $data['final_price'];
        $intervention->discount = $data['discount'];
        $intervention->diagnostic = $data['diagnostic'];
        $intervention->ticket_id = $data['ticket_id'];

        $intervention->save();
        return 'done';
        // 
        // return redirect('/ticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tickets = Ticket::find($id);
        $interventions = Intervention::where('ticket_id', $id)->get();
        return view('layouts.dashbord.intervention.index_inter', compact('tickets', 'interventions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tickets = Ticket::find($id);
        $interventions = Intervention::where('ticket_id', $id)->get();
        return view('layouts.dashbord.intervention.create_inter', compact('tickets', 'interventions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intervention $intervention)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intervention $intervention)
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview($id)
    {
        $ticket_details = Ticket::with('intervention')->find($id);
        // echo"<pre>";print_r($ticket_details);die;
        return view('layouts.dashbord.intervention.pdfview', ['ticket' => $ticket_details]);
    }
    public function pdfSave($id)
    {
        $ticket_details = Ticket::with('intervention')->find($id);
        $pdf = PDF::loadView('layouts.dashbord.intervention.pdfview', ['ticket' => $ticket_details])
            ->setPaper('a4', 'portrait');
        $file = 'inters_ticket_' . $ticket_details->id . '.pdf';
        return $pdf->download($file);
    }
}
