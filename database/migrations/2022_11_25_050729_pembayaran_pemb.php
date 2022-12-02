<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PembayaranPemb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_pemb', function (Blueprint $table) {
            $table->string('no_byr_pemb', 7)->primary();
            $table->string('kd_supp', 7);
            $table->string('no_pesan_pemb', 7);
            $table->date('tgl_byr_pemb');
            $table->integer('juml_pemb');
            $table->string('desc_pemb_penj');

            $table->foreign('kd_supp')->references('kd_supp')->on('supplier');
            $table->foreign('no_pesan_pemb')->references('no_pesan_pemb')->on('pesan_pemb');
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_pemb');
    }
}
