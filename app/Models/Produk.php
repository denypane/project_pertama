<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "products";
 
    protected $fillable = ['nama', 'harga', 'stok', 'berat', 'deskripsi', 'masa_kadaluarsa', 'created_at', 'updated_at'];

    public function productImage()
    {
        return $this->hasOne(GambarProduk::class, 'id_produk');
    }
    use HasFactory;
}
