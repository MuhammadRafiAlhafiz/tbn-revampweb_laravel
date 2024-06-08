<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Program";
        $programs = Program::all();
        return view('program.index', compact('title', 'programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create Program";
        return view('program.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'time' => 'required',
            'place' => 'required',
            'speaker' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'position' => 'required',
            'transport' => 'required',
            'hotel_name' => 'required',
            'ticket_type' => 'required',
            'price' => 'required',
            'photo_speaker' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '_1' . $request->poster->extension();
        $request->poster->move(public_path('images'), $imageName);

        $photoName = time() . '_2' . $request->photo_speaker->extension();
        $request->photo_speaker->move(public_path('images'), $photoName);

        Program::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'time' => $request->time,
            'place' => $request->place,
            'speaker' => $request->speaker,
            'poster' => $imageName,
            'position' => $request->position,
            'transport' => $request->transport,
            'hotel_name' => $request->hotel_name,
            'ticket_type' => $request->ticket_type,
            'price' => $request->price,
            'photo_speaker' => $photoName,
        ]);

        return redirect()->route('program.index')->with('success', 'Speaker berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Program";
        $program = Program::find($id);

        return view('program.edit', compact('title', 'program'));
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
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'time' => 'required',
            'place' => 'required',
            'speaker' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $program = Program::find($id);
        $imageName = $program->poster;

        if ($request->hasFile('poster')) {
            $imageName = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('images'), $imageName);
        }

        $program->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'time' => $request->time,
            'place' => $request->place,
            'speaker' => $request->speaker,
            'poster' => $imageName,
        ]);

        return redirect()->route('program.index')->with('success', 'Speaker berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);

        $photoPath = public_path('images/' . $program->poster);
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }
        $program->delete();

        return redirect()->route('program.index')->with('success', 'program berhasil dihapus.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerEvent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telp' => 'required',
            'ticket_id' => 'required',
        ]);

        // Mendapatkan informasi tiket berdasarkan ID
        $program = Program::find($request->ticket_id);

        // Validasi jika program tidak ditemukan
        if (!$program) {
            return redirect()->back()->with('error', 'Program tidak ditemukan.');
        }

        // Lakukan sesuai kebutuhan, misalnya menyimpan ke database
        // Contoh: Simpan data user ke dalam database
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telp = $request->telp;
        $user->save();

        // Jika Anda juga perlu menghubungkan user dengan program yang dipilih, Anda dapat melakukannya di sini
        // Misalnya, menyimpan relasi antara user dan program
        $user->programs()->attach($program);

        // Redirect ke halaman yang sesuai
        return redirect()->route('home')->with('success', 'Registrasi program berhasil. Terima kasih!');
    }
}
