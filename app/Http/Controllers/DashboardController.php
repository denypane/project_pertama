<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Produk;


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
                $products = Produk::with('productImage')->orderBy('id', 'asc')->get();
                // dd($products);
                return view('customer.index', compact('products'));
            }            
        }
        
        else{
            // dd('test');
            return view('index');
        }
    }

    // public function index()
    // {
    //     $products = DB::table('products')->get();
    //     dd($products);
    //     return view('customer.index', compact('products'));
    // }

}
