<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = "data_pesanan";
 
    protected $fillable = ['nama_pembeli', 'nama_produk', 'tanggal_pesanan', 'status', 'total_harga', 'no_telepon', 'pengiriman', 'alamat_lengkap', 'kecamatan', 'kota', 'provinsi', 'no_pesanan'];

    use HasFactory;
}
