@extends('layouts.app')

@section('content')


<div class="bg-white rounded-lg shadow-lg flex-1 p-6 font-custom">
    <h2 class="text-2xl font-semibold mb-4">Data Penyewaan Mobil</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border">#</th>
                    <th class="py-2 px-4 border">Nama</th>
                    <th class="py-2 px-4 border">Email</th>
                    <th class="py-2 px-4 border">Telepon</th>
                    <th class="py-2 px-4 border">Nama Mobil</th>
                    <th class="py-2 px-4 border">Tanggal Sewa</th>
                    <th class="py-2 px-4 border">Durasi</th>
                    <th class="py-2 px-4 border">Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sewas as $index => $sewa)
                <tr class="text-center border">
                    <td class="py-2 px-4 border">{{ $index + 1 }}</td>
                    <td class="py-2 px-4 border">{{ $sewa->nama }}</td>
                    <td class="py-2 px-4 border">{{ $sewa->email }}</td>
                    <td class="py-2 px-4 border">{{ $sewa->telepon }}</td>
                    <td class="py-2 px-4 border">{{ $sewa->mobil->nama ?? 'Tidak Ada' }}</td>
                    <td class="py-2 px-4 border">{{ $sewa->tanggal_sewa }}</td>
                    <td class="py-2 px-4 border">{{ $sewa->durasi }} Hari</td>
                    <td class="py-2 px-4 border">{{ $sewa->catatan ?? '-' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
