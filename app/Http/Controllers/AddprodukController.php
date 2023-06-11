<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


class AddprodukController extends Controller
{
    public function index()
    {
        return view('admin.addproduk');
    }

    public function TambahAddProduk()
    {
        $tambah_produk = DB::table('produk')->orderBy('nama_produk', 'asc')->get();
        
        return view('admin.addproduk')->with('tambah_produk', $tambah_produk);
    }

    public function PostAddProduk(Request $request)
    {
        $nama_produk = $request -> nama_produk;
        $harga = $request -> harga;
        $stok = $request -> stok;
        $berat = $request -> berat;
        $masa_kadaluarsa = $request -> masa_kadaluarsa;
        $kategori = $request -> kategori;
        $deskripsi = $request -> deskripsi;
        $foto_produk = $request -> foto_produk;
        
        DB::table('produk')->insert([
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'stok' => $stok,
            'berat' => $berat,
            'masa_kadaluarsa' => $masa_kadaluarsa,
            'kategori' => $kategori,
            'deskripsi' => $deskripsi,
            'foto_produk' => $foto_produk

        ]);

        return redirect('./produk');
    }
}
