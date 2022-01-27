<?php

namespace App\Http\Controllers;

use App\Models\tbanggota;
use App\Models\tbbuku;
use App\Models\tbpinjam;
use Illuminate\Http\Request;


class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = tbpinjam::all();
        return view('pinjaman.index',compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_buku = tbbuku::all();
        $data_anggota = tbanggota::all();
        return view('pinjaman.create',compact('data_buku','data_anggota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        tbpinjam::create($request->all());
        return redirect('pinjam')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbpinjam  $tbpinjam
     * @return \Illuminate\Http\Response
     */
    public function show(tbpinjam $tbpinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbpinjam  $tbpinjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_buku = tbbuku::all();
        $data_anggota = tbanggota::all();
        $pinjaman = tbpinjam::find($id);
        return view('pinjaman.edit',compact('pinjaman','data_buku','data_anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbpinjam  $tbpinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tbpinjam $tbpinjam)
    {
        $pinjaman = tbpinjam::find($tbpinjam);
        $pinjaman->tanggal_pinjam = $request->input('tanggal_pinjam');
        $pinjaman->tanggal_kembali = $request->input('tanggal_kembali');
        $pinjaman->id_buku = $request->input('id_buku');
        $pinjaman->id_anggota = $request->input('id_anggota');
        $pinjaman->update();

        return redirect('pinjam')->with('status', 'Data Berhasil Diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbpinjam  $tbpinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbpinjam $tbpinjam)
    {
        //
    }
}
