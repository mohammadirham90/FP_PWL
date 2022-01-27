<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbbuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tbbuku', function (Blueprint $table) {
        //     $table->id('id_buku');
        //     $table->string('kode_buku');
        //     $table->string('judul_buku');
        //     $table->string('tahun_terbit');
        //     $table->string('penerbit');
        //     $table->integer('stok');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbbuku');
    }
}
