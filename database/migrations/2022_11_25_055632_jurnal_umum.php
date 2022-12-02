<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JurnalUmum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal_umum', function (Blueprint $table){
            $table->string('no_jurnal', 16);
            $table->text('keterangan');
            $table->date('tgl_jurnal');
            $table->string('no_akun', 7);
            $table->integer('debet');
            $table->integer('kredit');
        
            
            $table->foreign('no_akun')->references('no_akun')->on('akun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurnal_umum');
    }
}
