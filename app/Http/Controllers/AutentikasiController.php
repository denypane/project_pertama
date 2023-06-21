<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;

class AutentikasiController extends Controller
{
    /**
     * Menyimpan penambahan akun yang didaftarkan ke dalam database.
     */

    public function PostRegister(Request $request)
    {
        $request -> validate([  
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'nama' => 'required',  
            'nomor_telepon' => 'required',
        ]);

        $data_users = $request->only(['email', 'password', 'nama', 'nomor_telepon']);
        
        $email = $request->email;
        $password = $request->password;
        $nama = $request->nama;
        $nomor_telepon = $request->nomor_telepon;


        // Menambahkan data ke dalam tabel "users ".

        $users  = User::create($data_users);

        // Langsung masuk menggunakan akun yang berhasil didaftarkan.

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            return redirect('./');
        }
        
        // Akan memuat ulang halaman dan memberikan pemberitahuan jika tidak berhasil mendaftarkan akun.
        else{
            return redirect()->back()->with('error', '');
        }
    }

    
    /**
     * Memproses permintaan masuk ke aplikasi menggunakan akun yang telah didaftarkan.
     */

    public function PostLogin(Request $request){

        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]);

        $email = $request->email;
        $password = $request->password;


        // Memeriksa akun dan akan masuk ke aplikasi dengan akun tersebut.

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $id = Auth::user()->id;
            $cek_admin_id = DB::table('users')->where('id', $id)->where('is_admin', 1)->first();

            $user = Auth::user();

            
            // Akan masuk sebagai admin jika kondisi terpenuhi.

            if(isset($cek_admin_id)){
                return redirect('./');
            }


            // Akan masuk sebagai pengguna jika kondisi tidak ada kondisi yang terpenuhi.   

            else{
                return redirect('./');
            }
        }


        // Akan memuat ulang halaman dan memberikan pemberitahuan jika tidak ada kondisi yang terpenuhi.
        
        else{
            return redirect()->back()->with('error', '');
        }          
    }


    /**
     * Keluarkan akun pengguna dari aplikasi.
     */

    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('./');
    }
}
