<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\hash;
use Illuminate\Support\facades\Auth;

class Authcontroller extends Controller
{
    function register()
    {
        return view('/register ');
    }
    function store(Request $request)
    {
        DB::table('admin')->insert([
            'nama'=> $request->nama,
            'username'=> $request->username,
            'password'=> Hash::make($request->password),
        ]);
        return redirect("/login");
    }
        function logout(){
            Auth::logout();

            return redirect('/login');


        }
       

}  


