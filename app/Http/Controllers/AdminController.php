<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  function datap(){
    $produk = DB::table('produk')->get();
    return view('/data_produk',['produk'=>$produk]);


  }
  function tambah_produk(){
    return view('tambah_produk');
  }


  function proses_tambah (request $request){
    $harga = $request->harga;
    $nama_produk = $request->nama_produk;
    $stok = $request->stok;

    $tambah = DB::table('produk')->insert([
      'nama_produk'=>$nama_produk,
      'harga'=>$harga,
      'stok'=>$stok
    ]);
    return redirect('/data_produk');
 }
 function hapus($id){
  DB::table('produk')->where('produk_id','=',$id)->delete();
  return redirect()->back();
 }
 function update($id){
  $produk = DB::table('produk')->where('produk_id','=', $id )->first();
  return view('/update_produk',['produk'=> $produk]);

}
function proses_update(request $request){
  $nama_produk = $request->nama_produk;
  $harga = $request->harga;
  $stok = $request->stok;
  $produk = DB::table('produk')->where('produk_id',$request->id)->update([
      'nama_produk' => $nama_produk,
      'harga' => $harga,
      'stok' => $stok

  ]);
  return redirect('/data_produk');
}



}
