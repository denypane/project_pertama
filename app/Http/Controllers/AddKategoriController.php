<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AddKategoriController extends Controller
{
    public function index()
    {
        return view('admin.addkategori');
    }

    public function TambahAddKategori()
    {
        $tambahkategori = DB::table('kategori')->orderBy('nama_kategori', 'asc')->get();
        
        return view('addkategori')->with('tambahkategori', $tambahkategori);
    }

    public function PostAddKategori(Request $request)
    {
        dd($request->all());
    //     $nama_kategori = $request -> nama_kategori;
        
    //     DB::table('kategori')->insert([
    //         'nama_kategori' => $nama_kategori

    //     ]);

    //     return redirect('./kategori');
    }
}
