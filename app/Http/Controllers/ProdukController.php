<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = DB::table('products')->select(
                'product_images.nama as foto_produk', 'products.nama as nama_produk', 'stok', 'harga', 'categories.nama as kategori'
            )
        ->join('product_images', 'products.id', '=', 'product_images.id_produk')
        ->join('categories', 'products.id_kategori', '=', 'categories.id')->get();

        // dd($produk);

        // $foto_produk = DB::table('product_images')->orderBy('id', 'asc')->first();

        return view('admin.produk', compact(['produk']));

    }

    public function add_produk()
    {
        $kategori = DB::table('categories')->orderBy('nama', 'asc')->get();

        return view('admin.add_produk')->with('kategori', $kategori);
    }

    public function PostAddProduk(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $request -> validate([  
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'berat' => 'required',
            'masa_kadaluarsa' => 'required',
            'id_kategori' => 'required',
            'deskripsi' => 'required',
            'foto_produk' => 'required',
        ]);

        $nama_produk = $request -> nama_produk;
        $harga = $request -> harga;
        $stok = $request -> stok;
        $berat = $request -> berat;
        $masa_kadaluarsa = $request -> masa_kadaluarsa;
        $id_kategori = $request -> id_kategori;
        $deskripsi = $request -> deskripsi;
        $foto_produk = $request->file('foto_produk');
        $jumlah_foto_produk = count($foto_produk);

        $now = date("Y-m-d H:i:s");
        
        DB::table('products')->insert([
            'id_kategori' => $id_kategori,
            'nama' => $nama_produk,
            'harga' => $harga,
            'stok' => $stok,
            'berat' => $berat,
            'deskripsi' => $deskripsi,
            'masa_kadaluarsa' => $masa_kadaluarsa,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $product_id = DB::table('products')->select('id')->orderBy('id', 'desc')->first();
        
        for ($x = 0; $x < $jumlah_foto_produk; $x++) {
            $nama_foto_produk[$x] =
                time() . '_' . $foto_produk[$x]->getClientOriginalName();
            $tujuan_upload = './product_images';
            $foto_produk[$x]->move($tujuan_upload, $nama_foto_produk[$x]);

            DB::table('product_images')->insert([
                'id_produk' => $product_id->id,
                'nama' => $nama_foto_produk[$x],
            ]);
        }

        return redirect('./produk');
    }
}
