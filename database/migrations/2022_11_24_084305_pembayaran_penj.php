<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PembayaranPenj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_penj', function (Blueprint $table) {
            $table->string('no_pemb_penj', 7)->primary();
            $table->string('kd_cust', 7);
            $table->string('no_pesan_penj', 7);
            $table->date('tgl_pemb_penj');
            $table->integer('juml_pemb');
            $table->string('desc_pemb_penj');

            $table->foreign('kd_cust')->references('kd_cust')->on('customer');
            $table->foreign('no_pesan_penj')->references('no_pesan_penj')->on('pesan_penj');
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_penj');
    }
}
