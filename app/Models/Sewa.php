<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewas'; // Pastikan nama tabel sesuai dengan database

    protected $fillable = [
        'mobil_id', 'nama', 'email', 'telepon', 
        'tanggal_sewa', 'durasi', 'catatan'
    ];

    // Relasi ke model Mobil
    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
}