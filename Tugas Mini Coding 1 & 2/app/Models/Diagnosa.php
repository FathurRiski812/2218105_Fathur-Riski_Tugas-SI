<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    // Mendefinisikan tabel dari model
    protected $table = 'diagnosa';

    // Mendefinisikan primary key
    protected $primaryKey = 'id_diagnosa';
    
    // Mendefinisikan field yg dilindungi (tidak boleh dimanipulasi)
    protected $guarded = [];

    protected $casts = [
        'tanggal_diagnosa' => 'datetime'
    ];
}
