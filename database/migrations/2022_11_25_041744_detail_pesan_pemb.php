<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailPesanPemb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pesan_pemb', function (Blueprint $table) {
            $table->string('no_pesan_pemb', 16);
            $table->string('kd_item', 7);
            $table->integer('qty_pemb');
            $table->integer('tarif_pemb');
            $table->integer('diskon_penj');
            $table->string('kd_pajak', 7);
            $table->string('kd_cust', 7); // tambahan untuk detail pelanggan di bagian form pembelian
            $table->integer('jumlah_pemb');
            $table->integer('harga_setpjk_pemb');
            $table->integer('subtotal_pemb');
            $table->integer('total_harga_pemb');
            $table->string('desc_pemb');

            $table->foreign('no_pesan_pemb')->references('no_pesan_pemb')->on('pesan_pemb');
            $table->foreign('kd_item')->references('kd_item')->on('item');
            $table->foreign('kd_pajak')->references('kd_pajak')->on('pajak');
            $table->foreign('kd_cust')->references('kd_cust')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pesan_pemb');
    }
}
