<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class GambarProduk extends Model
{
    protected $table = "product_images";
    protected $fillable = ['nama', 'created_at', 'updated_at'];

    public function product()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    use HasFactory;
}
