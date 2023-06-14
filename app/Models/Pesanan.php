<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = "pesanan";
 
    protected $fillable = ['tanggal_pesanan','no_pesanan','nama_produk','total_harga','pengiriman','status'];
    use HasFactory;
}
