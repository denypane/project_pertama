<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use app\pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $detail_pelanggan = DB::table('users')->orderBy('nama', 'asc')->get();

        return view('admin.pelanggan', compact(['detail_pelanggan']));
    }

    // public function pelanggan()
    // {
    //     $detail_pelanggan = DB::table('users')->orderBy('tanggal_daftar', 'asc')->get();
    //     // // dd($pesanan);
    //     return view('admin.pelanggan', ['detail_pelanggan' => $detail_pelanggan]);

    // }

    // public function delete($no_telepon){
    //     $data = pelanggan::find($no_telepon);
    //     $data-> delete();
    //     return redirect()->route('pelanggan')->With('sukses','data berhasil di hapus');

    // }
    
}
