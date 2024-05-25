<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_konsultasi extends Model
{
    use HasFactory;
    protected $table='hasil_konsultasi';

    // Mendefinisikan primary key
    protected $primaryKey = 'id_hasil_konsultasi';
    
    // Mendefinisikan field yg dilindungi (tidak boleh dimanipulasi)
    protected $guarded = [];
    protected $fillable= [''];
}
