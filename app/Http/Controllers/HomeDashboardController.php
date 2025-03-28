<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index', [
            'title' => 'Dashboard',
            'totalUsers' => 150, // Contoh data, bisa diambil dari database
            'totalOrders' => 80,
            'totalRevenue' => 5000000
        ]);
    }
}