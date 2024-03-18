<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\models\Admin;
class PenjualanController extends Controller
{
  function penjualan (){
    $produk = DB::table('produk')->where('status','tampil')->get();

    $pelanggan = DB::table('pelanggan')->get();

    $penjualan = DB::table('penjualan')->latest()->first();

    $penjualan_id = "";

    if(!$penjualan){
        $penjualan_id = '1';
    }else{

      if($penjualan->status =="selesai"){
        $penjualan_id = $penjualan->penjualan_id + 1;
      }else{
        $penjualan_id = $penjualan->penjualan_id;
      }
    }

     $detailpenjualan=DB::table('produk')->where("penjualan_id", $penjualan_id)
    ->join("detail_penjualan","produk.id","=",'detail_penjualan.produk_id')
    ->get();

    return view ('/penjualan',['produk'=>$produk,'pelanggan'=>$pelanggan ,'penjualan_id' => $penjualan_id,'detailpenjualan'=>$detailpenjualan]);
}
//tambah panjualan
function tambah(Request $request ){
    $produk = DB::table('produk')->where('id', $request->produk)->first();

    $dataPenjualan = DB::table('penjualan')->where('penjualan_id', $request->penjualan_id)->first();
    if(!$dataPenjualan){
        $penjualan = DB::table('penjualan')->insert([
            'penjualan_id' => $request->penjualan_id,
            'tanggal_penjualan'=> date("Y-m-d"),
            'total_harga' => 0,
            'pelanggan_id' => $request->pelanggan,
            'status'=>"pending"
        ]);
    }
    ///stok&detail
    if($produk->stok - $request->qty< 0){
      return redirect()->back()->with("alert","Stok Kurang");
    }else{

    $detail= DB::table('detail_penjualan')->insert([
        'penjualan_id' => $request->penjualan_id,
        'produk_id' => $request->produk,
        'jumlah_produk'=> $request->qty,
        'subtotal'=> $request->qty * $produk->harga,
    ]);
    DB::table('produk')->where('id', $request->produk)->update(['stok'=>$produk->stok - $request->qty]);
    
    return redirect()->back();
}}
//data penjualan
function data_penjualan(){
    $penjualan = DB::table('pelanggan')
    ->join('penjualan', 'penjualan.pelanggan_id', '=', 'pelanggan.pelanggan_id')
    ->get();
    // return $penjualan;
    return view ('data_penjualan',['penjualan'=> $penjualan]);
}

function detail(Request $request ,$id){
  $detail = DB::table('detail_penjualan')
  ->join('produk', 'produk.id', '=' ,'detail_penjualan.produk_id')
  ->join('penjualan','penjualan.penjualan_id','=','detail_penjualan.penjualan_id')
  ->where('detail_penjualan.penjualan_id', $id)
  ->get();

  return view('detail_penjualan',['detail'=> $detail]);
}


function checkout(Request $request){
  $update=DB::table('penjualan')->where('penjualan_id',$request->penjualan_id)->update([
      'status'=>"selesai",
      'total_harga'=> $request->total,
  ]);
  return redirect()->back();
}
public function cetakStruk(Request $request, $id)
{
    
    $count =DB::table('detail_penjualan')->where('penjualan_id',$id)->sum('jumlah_produk');

    $penjualan = DB::table('penjualan')
        ->where('penjualan_id', $id)
        ->first();

    $detail = DB::table('detail_penjualan')
        ->join('produk', 'produk.id', '=', 'detail_penjualan.produk_id')
        ->where('detail_penjualan.penjualan_id', $id)
        ->get();

        $percobaan = DB::table('penjualan')
        ->join('pelanggan', 'pelanggan.pelanggan_id', '=', 'penjualan.pelanggan_id')
        ->get();
    
    return view('struk', ['detail' => $detail, 'penjualan' => $penjualan,'count'=>$count,'percobaan'=>$percobaan]);
}

function hapus_penjualan(request $request, $id){
  $datapenjualan = DB::table('detail_penjualan')->where('produk_id', '=', $id)->first();
  $produk = DB::table('produk')->where('id', $id)->first();

  DB::table("produk")->where('id', $id)->update(['stok' => $produk->stok + $datapenjualan->jumlah_produk]);
  DB::table('detail_penjualan')->where('produk_id', '=', $id)->delete();
  return redirect()->back();
}


}
