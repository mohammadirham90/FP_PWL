<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kembali extends Model
{
    public function anggota(){
        return $this->belongsTo(tbanggota::class,'id_anggota','id_anggota');
    }
    public function buku(){
        return $this->belongsTo(tbbuku::class,'id_buku','id_buku');
    }
    public function pinjam(){
        return $this->belongsTo(tbpinjam::class,'id_peminjam','id_pinjaman');
    }
    protected $table = 'tbpengembalian';
}
