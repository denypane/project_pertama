<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use Session;


class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $id = Auth::user()->id;
            $cek_admin_id = DB::table('users')->where('id', $id)->where('is_admin', 1)->first();

            if($cek_admin_id){
                $pesanan = DB::table('orders')->orderBy('nomor_pesanan', 'asc')->get();

                return view('admin.dashboard', compact(['pesanan']));

            }
            
            else{
                return view('customer.index');
            }            
        }
        
        else{
            // dd('test');
            return view('index');
        }
    }

    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function pesanan()
    {
        // $pesanan = DB::table('order')->orderBy('nomor_pesanan', 'asc')->get();
        // // dd($pesanan);
        // return view('admin.dashboard', ['pesanan' => $pesanan]);

    }

}
