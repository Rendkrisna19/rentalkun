<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;

class PenyewaanController extends Controller
{
    public function index()
    {
        // Ambil semua data penyewaan mobil dari database
        $sewas = Sewa::with('mobil')->orderBy('created_at', 'desc')->get();

        // Tampilkan ke view
        return view('penyewaan.index', compact('sewas'));
    }
}