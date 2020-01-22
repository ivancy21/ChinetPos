<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pharmacys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pharmacys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pharmacyName')->unique();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('stateProvince')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('email')->unique();
            $table->string('mobileNumber')->nullable();
            $table->string('contactNumber')->nullable();
            $table->string('fax')->nullable();
            $table->string('pharmacyPhoto')->nullable();
            $table->string('pharmacy_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pharmacys');
    }
}
