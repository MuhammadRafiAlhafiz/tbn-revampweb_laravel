<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:participants',
            'telp' => 'required|numeric',
            'notes' => 'nullable|string',
            'afiliate' => 'nullable|string',
            'ticket_id' => 'required|exists:tickets,id',
        ]);
    
        Participant::create([
            'name' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
            'notes' => $request->notes,
            'afiliate' => $request->afiliate,
            'ticket_id' => $request->ticket_id,
        ]);
    
        return redirect()->route('home')->with('success', 'Pendaftaran berhasil!');
    }
}
