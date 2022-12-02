<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PesanPenj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_penj', function (Blueprint $table) {
            $table->string('no_pesan_penj', 16)->primary();
            $table->string('kd_cust', 7);
            $table->string('no_ref_penj', 50);
            $table->string('no_faktur_penj', 16); //tambahan faktur penjualan 
            $table->date('tgl_pesan');
            $table->string('kd_sp', 7);
            $table->string('subjek_ctt');
            $table->integer('total_penj');

            $table->foreign('kd_cust')->references('kd_cust')->on('customer');
            $table->foreign('kd_sp')->references('kd_sp')->on('staff_penjualan');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesan_penj');
    }
}
