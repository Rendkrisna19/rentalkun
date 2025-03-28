<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mobil_id')->constrained()->onDelete('cascade');
            $table->string('nama'); // Pastikan ini cocok dengan model
            $table->string('email');
            $table->string('telepon');
            $table->date('tanggal_sewa');
            $table->integer('durasi');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};