<?php
namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Program;
use App\Models\Regispart;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function addEvent(Request $request, $id)
    {
        $programId = $request->input('program_id'); // Mengambil ID program dari permintaan
        $program = Program::find($programId); // Mengambil program dari database berdasarkan ID
        
        if (!$program) {
            // Program tidak ditemukan
            return back()->withErrors(['msg' => 'Program tidak ditemukan.'])->withInput();
        }
        
        // Sekarang Anda dapat menggunakan $program dalam logika validasi
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telp' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'afiliate' => 'nullable|string|max:255',
            'ticket_id' => $program->price > 0 ? 'required|integer' : 'nullable|integer',
        ]);
        try {
            
            $participant = Participant::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'telp' => $validated['telp'],
                'notes' => $validated['notes'],
                'afiliate' => $validated['afiliate'],
                'ticket_id' => $validated['ticket_id'],
            ]);


            
            $program = Program::findOrFail($id);

            if ($program) {
                // Create new regispart entry
                Regispart::create([
                    'participant_id' => $participant->id,
                    'program_id' => $program->id,
                    'status' => 'pending', // or other status logic
                    'attendance' => 'not attended', // or other attendance logic
                    'notes' => $validated['notes'],
                ]);

                $redirectUrl = 'https://wa.me/6285785455575?text=Halo%2C%0ASaya%20telah%20mendaftar%20sebagai%20peserta%20' .
                urlencode($program->name) .
                '%20%28Registration%20ID%3A%20' .
                urlencode($participant->id) .
                '%29%0AName%3A%20' .
                urlencode($participant->name) .
                '%0AEmail%3A%20' .
                urlencode($participant->email) .
                '%0APhone%20Number%3A%20' .
                urlencode($participant->telp) .
                '%0AAfiliation%3A%20' .
                urlencode($participant->afiliate) .
                '%0ATicket%20Type%3A%20' .
                urlencode($participant->ticket_id) .
                '%0APrice%3A%20Rp%20' . // Menampilkan harga tiket
                urlencode($program->price) . // Harga tiket
                '%0A%0AHarap%20konfirmasi%20pendaftaran%20dan%20informasi%20pembayaran%20saya.%0ATerima%20kasih.';

return redirect()->away($redirectUrl);
            } else {
                return back()->withErrors(['msg' => 'Pendaftaran gagal. Program tidak ditemukan.'])->withInput();
            }
            
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Pendaftaran gagal. Coba ulangi lagi.'])->withInput();
        }
    }
    
}
