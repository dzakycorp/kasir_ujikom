<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\models\Admin;
class PetugasController extends Controller
{
    
    function daftar_petugas(request $request){

        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        
      
       
        $admin = DB::table('admin')->insert([
            
            'nama' => $nama,
            'username' => $username,
            'password' => Hash::make ($password),
           
            
        ]);

        return redirect('/login');
    }
    function regis(){
        return view('/register');
    }

    function penjualan(){
        $pelanggan = DB::table('pelanggan')->get();
        $produk = DB::table('produk')->get();
        return $produk;

    
        
    }    

 
}