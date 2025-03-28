<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller {
    public function index() {
        return view('dashboard.mobil.index', ['mobils' => Mobil::all()]);
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string',
            'jenis' => 'required|string',
            'tipe' => 'required|string',
            'harga_sewa' => 'required|numeric',
        ]);

        Mobil::create($request->all());
        return redirect()->back()->with('success', 'Mobil berhasil ditambahkan!');
    }

    public function destroy(Mobil $mobil) {
        $mobil->delete();
        return redirect()->back()->with('success', 'Mobil berhasil dihapus!');
    }
}