@extends('layouts.app')

@section('title', 'Home')

@section('content')


<main class="flex-1 p-10 font-custom">
    <h1 class="text-2xl font-semibold mb-5">Dashboard Overview</h1>

    <div class="grid grid-cols-3 gap-5">
        <div class="bg-white p-5 shadow rounded">
            <h3 class="text-lg font-semibold">Total Users</h3>
            <p class="text-2xl font-bold">{{ $totalUsers }}</p>
        </div>

        <div class="bg-white p-5 shadow rounded">
            <h3 class="text-lg font-semibold">Total Orders</h3>
            <p class="text-2xl font-bold">{{ $totalOrders }}</p>
        </div>

        <div class="bg-white p-5 shadow rounded">
            <h3 class="text-lg font-semibold">Total Revenue</h3>
            <p class="text-2xl font-bold">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</p>
        </div>
    </div>
</main>

@endsection