<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    public function Penjualans(){
        return $this->belongsTo(Penjualan::class, 'penjualans_id', 'id');
        
    }
    
}
