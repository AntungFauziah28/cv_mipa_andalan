<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TempPesanPenj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_pesan_penj', function (Blueprint $table) {
            $table->string('kd_item', 7);
            $table->integer('qty_pesan_penj');

            $table->foreign('kd_item')->references('kd_item')->on('item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_pesan_penj');
    }
}
