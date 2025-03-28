<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder lainnya di sini jika ada
        $this->call([
            AdminSeeder::class, // Pastikan AdminSeeder sudah ada
        ]);
    }
}