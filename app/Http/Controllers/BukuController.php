<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function data(){
        $tbbuku = DB::table('tbbuku')->get();
        return view('buku.data',compact('tbbuku'));
    }
    public function add(){
        return view('buku.add');
    }
    public function addproses(Request $request){
        DB::table('tbbuku')->insert([
            'kode_buku' => $request->kd_buku,
            'judul_buku' => $request->jdl_buku,
            'tahun_terbit' => $request->thn_terbit, 
            'penerbit' => $request->penerbit,
            'stok' => $request->stok
        ]);
        return redirect('buku')->with('status', 'Data Berhasil Ditambah');
        
    }
    public function editbuku($id){
        $tbbuku = DB::table('tbbuku')->where('id_buku',$id)->first();
        return view('buku.edit',compact('tbbuku'));

    }
    public function editbukuproses(Request $request,$id){
        DB::table('tbbuku')->where('id_buku',$id)->update([
            'kode_buku' => $request->kd_buku,
            'judul_buku' => $request->jdl_buku,
            'tahun_terbit' => $request->thn_terbit,
            'penerbit' => $request->penerbit,
            'stok' => $request->stok
        ]);
        return redirect('buku')->with('status', 'Data Berhasil DiUbah');

    }
    public function deletebuku($id){
        DB::table('tbbuku')->where('id_buku',$id)->delete();
        return redirect('buku')->with('status', 'Data Berhasil Dihapus');
    }
}
