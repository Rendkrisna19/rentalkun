<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class HomeController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('welcome', compact('mobils'));
    }
}