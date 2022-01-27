<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbpiinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tbpeminjam', function (Blueprint $table) {
        //     $table->id('id_pinjaman');
        //     $table->date('tanggal_pinjam');
        //     $table->date('tangga_kembali');
        //     $table->bigInteger('id_buku')->unsigned();
        //     $table->bigInteger('id_anggota')->unsigned();
            
        // });
        // Schema::table('tbpinjam', function (Blueprint $table) {
        //     $table->foreign('id_buku')->references('id')->on('tbbuku');
        //     $table->foreign('id_anggota')->references('id')->on('tbanggota');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbpiinjam');
    }
}
