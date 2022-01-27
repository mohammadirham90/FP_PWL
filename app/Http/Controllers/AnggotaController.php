<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class AnggotaController extends Controller
{
    public function data(){
        $tbanggota = DB::table('tbanggota')->simplePaginate(5);
        $cbuku = DB::table('tbbuku')->count();
        $cpinjam = DB::table('tbpinjams')->count();
        $ckembali = DB::table('tbpengembalian')->count();

        // return view('anggota.data',['tbanggota'=>$tbanggota]);
        return view('anggota.data',compact('tbanggota','cbuku','ckembali','cpinjam'));
    }
    public function add(){
        return view('anggota.add');
    }

    public function addproces(Request $request){
        $validated = $request->validate([
            'nama_anggota' => 'required|min:5',
            'alamat' => 'required|min:5',
            'no_tlp' => 'required|min:5'
        ]);    
        DB::table('tbanggota')->insert([
            'nama_anggota' => $request->nama_anggota,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp 
        ]);
        return redirect('/')->with('status', 'Data Berhasil Ditambah');

    }
    public function edit($id){
        $tbanggota = DB::table('tbanggota')->where('id_anggota',$id)->first();

        return view('anggota.edit',compact('tbanggota'));
    }
    public function editproses(Request $request,$id){
        DB::table('tbanggota')->where('id_anggota',$id)->update([
            'nama_anggota' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp
        ]);
        return redirect('/')->with('status', 'Data Berhasil Update');

    }
    public function delete($id){
        DB::table('tbanggota')->where('id_anggota',$id)->delete();
        return redirect('/')->with('status', 'Data Berhasil Dihapus');

    }
}
