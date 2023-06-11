<?php

namespace App\Http\Controllers;

use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $pesanan = DB::table('orders')->orderBy('nomor_pesanan', 'asc')->get();
        // dd($pesanan);

        // return view('admin.dashboard', ['pesanan' => $pesanan]);
        return view('admin.dashboard', compact(['pesanan']));
    }

    public function pesanan()
    {
        // $pesanan = DB::table('order')->orderBy('nomor_pesanan', 'asc')->get();
        // // dd($pesanan);
        // return view('admin.dashboard', ['pesanan' => $pesanan]);

    }

}
