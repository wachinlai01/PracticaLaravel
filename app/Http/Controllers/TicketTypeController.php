<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TicketType;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket_types = TicketType::all();
        return view('ticketType/index',[
            'ticket_types'=>$ticket_types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticketType/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket_type = new TicketType;
        $ticket_type -> type = $request -> input('type');
        $ticket_type -> save();

        return redirect('/ticketType');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket_type = TicketType::find($id);

        return view('ticketType.show',[
            'ticket_type'=> $ticket_type
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket_type = TicketType::where('id','=',$id)->first();

        return view('ticketType.edit', [
            'ticket_type' => $ticket_type
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket_type = TicketType::where('id','=',$id)->first();
        $ticket_type -> type = $request -> input('type');
        $ticket_type -> save();

        return redirect('/ticketType');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket_type = TicketType::where('id','=',$id)->first();
        $ticket_type->delete();
        return redirect('/ticketType');
    }
}
