<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_item', function (Blueprint $table) {
            $table->string('kd_item', 7);
            $table->string('no_akun', 7);
            $table->string('kd_pajak', 7);
            $table->integer('harga_jual');
            $table->integer('harga_beli');
            $table->string('desc_penj');
            $table->string('desc_pemb');

            $table->foreign('kd_item')->references('kd_item')->on('item');
            $table->foreign('no_akun')->references('no_akun')->on('akun');
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
        Schema::dropIfExists('detail_item');
    }
}
