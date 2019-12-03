<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PharmacyMedicine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PharmacyMedicine', function (Blueprint $table) {
            $table->increments('id');
            $table->Unsignedinteger('medicineId');
            $table->integer('purchasedPrice')->nullable();
            $table->string('receivedMonth');
            $table->string('receivedDay');
            $table->string('receivedYear');
            $table->string('manufacturedMonth');
            $table->string('manufacturedDay');
            $table->string('manufacturedYear');
            $table->string('expirationMonth');
            $table->string('expirationDay');
            $table->string('expirationYear');
            $table->integer('quantity');
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
        Schema::dropIfExists('PharmacyMedicine');
    }
}
