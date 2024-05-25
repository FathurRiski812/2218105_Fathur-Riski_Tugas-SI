<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsultasi extends Model
{
    use HasFactory;
    protected $table='konsultasi';

    // Mendefinisikan primary key
    protected $primaryKey = 'id_konsultasi';
    
    // Mendefinisikan field yg dilindungi (tidak boleh dimanipulasi)
    protected $guarded = [];
    protected $fillable= [''];
    protected $casts = [
        'tanggal_konsultasi' => 'datetime'
    ];
}
