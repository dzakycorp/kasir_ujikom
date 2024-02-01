<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelangganController extends Controller
{
    function datapel(){
        $pelanggan = DB::table('pelanggan')->get();
        return view('/data_pelanggan',['pelanggan'=>$pelanggan]);
    
    
      }

      function tambah_pelanggan(){
        return view('tambah_pelanggan');
      }
    
    
      function proses_tambahpel (request $request){
        $nama_pelanggan = $request->nama_pelanggan;
        $alamat = $request->alamat;
        $nomor_telepon = $request->nomor_telepon;
    
        $tambahpel = DB::table('pelanggan')->insert([
          'nama_pelanggan'=>$nama_pelanggan,
          'alamat'=>$alamat,
          'nomor_telepon'=>$nomor_telepon
        ]);
        return redirect('/data_pelanggan');
     }
     function hapus($id){
      DB::table('pelanggan')->where('pelanggan_id','=',$id)->delete();
      return redirect()->back();
     }  
     function updatepel($id){
        $pelanggan = DB::table('pelanggan')->where('pelanggan_id','=', $id )->first();
        return view('/update_pelanggan',['pelanggan'=> $pelanggan]);
      
      }
      function proses_update(request $request){
        $nama_pelanggan = $request->nama_pelanggan;
        $alamat = $request->alamat;
        $nomor_telepon = $request->nomor_telepon;
        $pelanggan = DB::table('pelanggan')->where('pelanggan_id',$request->id)->update([
            'nama_pelanggan' => $nama_pelanggan,
            'alamat' => $alamat,
            'nomor_telepon' => $nomor_telepon
      
        ]);
        return redirect('/data_pelanggan');
      }
}
