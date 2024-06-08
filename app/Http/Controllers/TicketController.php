<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'no_ticket' => 'required',
            'place' => 'required',
            'date' => 'required',
            'type' => 'required',
            'program_id' => 'required',
        ]);

        Ticket::create([
            'no_ticket' => $request->no_ticket,
            'place' => $request->place,
            'date' => $request->date,
            'type' => $request->type,
            'program_id' => $request->program_id,
        ]);

        return redirect()->route('ticket.index')->with('success', 'Speaker berhasil ditambahkan.');
    }


}
