<?php
namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function addEvent(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:participants',
            'telp' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'afiliate' => 'nullable|string|max:255',
            'ticket_id' => 'required|integer|exists:tickets,id',
        ]);

        try {
            // Membuat partisipan baru
            $participant = Participant::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'telp' => $validated['telp'],
                'notes' => $validated['notes'],
                'afiliate' => $validated['afiliate'],
                'ticket_id' => $validated['ticket_id'],
            ]);

            $program = Program::findOrFail($id); // Mengambil program pertama, Anda bisa sesuaikan dengan kebutuhan Anda

            if ($program) {
                // URL redirect dengan menggunakan data program dan partisipan
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
                    '%0A%0AHarap%20konfirmasi%20pendaftaran%20dan%20informasi%20pembayaran%20saya.%0ATerima%20kasih.';

                // Redirect ke URL WhatsApp
                return redirect()->away($redirectUrl);
            } else {
                // Jika program tidak ditemukan
                return back()->withErrors(['msg' => 'Pendaftaran gagal. Program tidak ditemukan.'])->withInput();
            }
            
        } catch (\Exception $e) {
            // Jika terjadi kesalahan saat membuat partisipan
            return back()->withErrors(['msg' => 'Pendaftaran gagal. Coba ulangi lagi.'])->withInput();
        }
    }
}
