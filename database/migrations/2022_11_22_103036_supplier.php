<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Supplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->string('kd_supp', 7)->primary();
            $table->string('nm_supp', 50);
            $table->string('nm_perus', 50);
            $table->string('npwp_supp', 16);
            $table->string('email_supp', 100);
            $table->string('alamat_supp', 50);
            $table->string('telepon_supp', 13);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}
