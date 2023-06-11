<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('categories')->orderBy('nama', 'asc')->get();

        // $produk = DB::table('products')->orderBy('nama', 'asc')->get();


        return view('admin.kategori', compact(['kategori']));
        
        // return view('admin.kategori')->with('kategori', $kategori);
    }

    public function add_kategori()
    {
        return view('admin.add_kategori');
    }

    public function PostAddKategori(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $request -> validate([  
            'nama_kategori' => 'required',   
        ]);

        $nama_kategori = $request->nama_kategori;

        $now = date("Y-m-d H:i:s");

        DB::table('categories')->insert([
            'nama' => $nama_kategori,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        return redirect('./kategori');
    }
}
