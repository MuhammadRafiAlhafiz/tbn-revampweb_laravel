<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    // public function addEvent(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:participants',
    //         'telp' => 'required|numeric',
    //         'notes' => 'nullable|string',
    //         'afiliate' => 'nullable|string',
    //         'ticket_id' => 'required|exists:tickets,id',
    //     ]);
    
    //     Participant::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'telp' => $request->telp,
    //         'notes' => $request->notes,
    //         'afiliate' => $request->afiliate,
    //         'ticket_id' => $request->ticket_id,
    //     ]);
    
    //     return redirect()->route('home')->with('success', 'Pendaftaran berhasil!');
    // }

    // public function addEvent(Request $request){
    //     // do smth (insert user to database)
    //     Participant::create([
    //         'name' => $request['name'],
    //         'email' => $request['email'],
    //         'telp' => $request['telp'],
    //         'notes' => $request['notes'],
    //         'afiliate' => $request['afiliate'],
    //         'ticket_id' => $request['ticket_id'],
    
    //     ]);

    //     if($request){
    //         // berhasil add user
            
    //             // return view('pages.register.payment');
    //             return dd('succes');
           
    //     } else {
    //         // gagal add user
    //         return dd('fail');
    //     }
    // }
    public function addEvent(Request $request){
        // Validasi input jika diperlukan
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telp' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'afiliate' => 'nullable|string|max:255',
            'ticket_id' => 'required|integer|exists:tickets,id', // Pastikan nilai ticket_id valid
        ]);
    
        // Insert data ke database
        Participant::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'telp' => $validated['telp'],
            'notes' => $validated['notes'],
            'afiliate' => $validated['afiliate'],
            'ticket_id' => $validated['ticket_id'],
        ]);
    
        // Berhasil menambahkan user
        return view('payment');
    }
}
