<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->string('kd_cust', 7)->primary();
            $table->string('jenis_cust', 50);
            $table->string('nm_cust', 50);
            $table->string('nm_perus', 50);
            $table->string('npwp_cust', 16);
            $table->string('email_cust', 100);
            $table->string('alamat_cust', 50);
            $table->string('telepon_cust', 13);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
