<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbpinjam extends Model
{
    protected $primaryKey="id_pinjaman";
    public $timestamps = false;
    public function anggota(){
        return $this->belongsTo(tbanggota::class,'id_anggota','id_anggota');
    }
    public function buku(){
        return $this->belongsTo(tbbuku::class,'id_buku','id_buku');
    }
    protected $fillable = ['id_peminjaman','tanggal_pinjam','tangga_kembali','id_buku','id_anggota'];
    protected $hidden = ['created at','updated at'];
}
