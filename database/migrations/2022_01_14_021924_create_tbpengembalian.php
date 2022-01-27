<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbpengembalian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tbpengembalian', function (Blueprint $table) {
        //     $table->id('id_pengembalian');
        //     $table->date('tanggal_kembali');
        //     $table->bigInteger('id_peminjam')->unsigned();
        //     $table->bigInteger('id_buku')->unsigned();
        //     $table->bigInteger('id_anggota')->unsigned();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbpengembalian');
    }
}
