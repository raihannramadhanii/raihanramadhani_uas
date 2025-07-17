<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    public function Penitipans(){
        return $this->belongsTo(Penitipan::class, 'penitipans_id', 'id');
        
    }

}
