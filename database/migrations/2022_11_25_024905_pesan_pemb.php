<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PesanPemb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_pemb', function (Blueprint $table) {
            $table->string('no_pesan_pemb', 16)->primary();
            $table->string('no_faktur_pemb', 16);
            $table->string('kd_supp', 7);
            $table->date('tgl_pesan_pemb');
            $table->integer('total_pemb');

            $table->foreign('kd_supp')->references('kd_supp')->on('supplier');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesan_pemb');
    }
}
