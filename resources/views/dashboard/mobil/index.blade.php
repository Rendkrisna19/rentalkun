@extends('layouts.app')

@section('title', 'Dashboard Mobil')

@section('content')
<div class="flex font-custom">
    <div class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Data Mobil</h1>

        <!-- Form Tambah Mobil -->
        <div class="bg-white p-6 shadow-md rounded-lg mb-6 font-custom">
            <form method="POST" action="/dashboard/mobil">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Nama Mobil</label>
                    <input type="text" name="nama" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Nama Mobil">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Jenis</label>
                    <select name="jenis" class="w-full p-2 border border-gray-300 rounded mt-1">
                        <option value="Sedan">Sedan</option>
                        <option value="SUV">SUV</option>
                        <option value="MPV">MPV</option>
                        <option value="Hatchback">Hatchback</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Tipe</label>
                    <select name="tipe" class="w-full p-2 border border-gray-300 rounded mt-1">
                        <option value="Manual">Manual</option>
                        <option value="Automatic">Automatic</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Harga Sewa</label>
                    <input type="number" name="harga_sewa" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Harga Sewa">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Mobil</button>
            </form>
        </div>

        <!-- Daftar Mobil -->
        <div class="bg-white p-6 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Daftar Mobil</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-3">Nama</th>
                            <th class="border p-3">Jenis</th>
                            <th class="border p-3">Tipe</th>
                            <th class="border p-3">Harga Sewa</th>
                            <th class="border p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mobils as $mobil)
                            <tr class="text-center">
                                <td class="border p-3">{{ $mobil->nama }}</td>
                                <td class="border p-3">{{ $mobil->jenis }}</td>
                                <td class="border p-3">{{ $mobil->tipe }}</td>
                                <td class="border p-3">Rp {{ number_format($mobil->harga_sewa, 0, ',', '.') }}</td>
                                <td class="border p-3">
                                    <form method="POST" action="/dashboard/mobil/{{ $mobil->id }}">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
