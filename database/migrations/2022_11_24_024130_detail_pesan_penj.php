<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailPesanPenj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pesan_penj', function (Blueprint $table) {
            $table->string('no_pesan_penj', 16);
            $table->string('kd_item', 7);
            $table->integer('qty_penj');
            $table->integer('tarif_penj');
            $table->integer('diskon_penj');
            $table->string('kd_pajak', 7);
            $table->integer('jumlah_penj');
            $table->integer('harga_setpjk_penj');
            $table->integer('subtotal_penj');
            $table->integer('total_harga_penj');
            $table->string('desc_penj');

            $table->foreign('no_pesan_penj')->references('no_pesan_penj')->on('pesan_penj');
            $table->foreign('kd_item')->references('kd_item')->on('item');
            $table->foreign('kd_pajak')->references('kd_pajak')->on('pajak');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pesan_penj');
    }
}
