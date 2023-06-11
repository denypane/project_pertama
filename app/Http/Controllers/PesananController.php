<?php

namespace App\Http\Controllers;

use DB;

use App\Models\DataPesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = DB::table('orders')->orderBy('nomor_pesanan', 'asc')->get();
        // dd($pesanan);
        // return view('admin.pesanan', ['pesanan' => $pesanan]);

        return view('admin.pesanan', compact(['pesanan']));
    }

    // public function Pesanan()
    // {
    //     $pesanan = DB::table('pesanan')->orderBy('tanggal_pesanan', 'asc')->get();
    //     // dd($pesanan);
    //     return view('admin.pesanan', ['pesanan' => $pesanan]);

    // }

    // public function DataPesanan()
    // {
    //     $data_pesanan = DB::table('data_pesanan')->get();
    //     // dd($datas);

    //     return view('admin.datapesanan')->with('data_pesanan', $data_pesanan);

    // }
}
