<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule_Gejala extends Model
{
    use HasFactory;
    protected $table='rule_gejala';

    // Mendefinisikan primary key
    protected $primaryKey = 'id_rule_gejala';
    
    // Mendefinisikan field yg dilindungi (tidak boleh dimanipulasi)
    protected $guarded = [];
    protected $fillable= [''];
}
