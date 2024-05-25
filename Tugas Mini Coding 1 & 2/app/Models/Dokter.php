<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // Mendefinisikan tabel dari model
    protected $table = 'dokter';

    // Mendefinisikan primary key
    protected $primaryKey = 'id_dokter';
    
    // Mendefinisikan field yg dilindungi (tidak boleh dimanipulasi)
    protected $guarded = [];

    protected $casts = [
        'tanggal_pelayanan' => 'datetime'
    ];
}
