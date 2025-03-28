<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Mobil;

class SewaController extends Controller
{
    public function create()
    {
        $mobils = Mobil::all(); // Ambil semua mobil
        return view('sewa', compact('mobils'));
    }

    public function store(Request $request)
{
    $request->validate([
        'mobil_id' => 'required|exists:mobils,id',
        'nama' => 'required|string', // Ubah dari 'nama_pelanggan' ke 'nama'
        'email' => 'required|email',
        'telepon' => 'required|string|max:20',
        'tanggal_sewa' => 'required|date',
        'durasi' => 'required|integer|min:1',
        'catatan' => 'nullable|string',
    ]);

    Sewa::create([
        'mobil_id' => $request->mobil_id,
        'nama' => $request->nama, // Sesuai form frontend
        'email' => $request->email,
        'telepon' => $request->telepon,
        'tanggal_sewa' => $request->tanggal_sewa,
        'durasi' => $request->durasi,
        'catatan' => $request->catatan,
    ]);

    return response()->json(['success' => true, 'message' => 'Sewa berhasil dikirim!']);
}

}