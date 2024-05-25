<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
    use HasFactory;
    // Mendefinisikan tabel dari model
    protected $table = 'penyakit';

    // Mendefinisikan primary key
    protected $primaryKey = 'id_penyakit';
    
    // Mendefinisikan field yg dilindungi (tidak boleh dimanipulasi)
    protected $guarded = [];

    // Mendifinisikan untuk created_at dan updated_at secara otomatis saat membuat/mengubah record
    public $timestamps = false;

    // protected $casts = [
    //     'tanggal_pelayanan' => 'datetime'
    // ];
}
