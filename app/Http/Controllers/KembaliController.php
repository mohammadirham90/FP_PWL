<?php

namespace App\Http\Controllers;

use App\Models\kembali;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kembali = kembali::all();
        return view('pengembalian.index',compact('kembali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function show(kembali $kembali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function edit(kembali $kembali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kembali $kembali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function destroy(kembali $kembali)
    {
        //
    }
}
