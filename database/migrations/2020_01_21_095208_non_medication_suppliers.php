<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NonMedicationSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NonMedicationSuppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nonMedicationId');
            $table->unsignedInteger('supplierId');
            $table->string('lotNumber');
            $table->string('receivedMonth');
            $table->string('receivedDay');
            $table->string('receivedYear');
            $table->float('purchasedPrice');
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
        Schema::dropIfExists('NonMedicationSuppliers');
    }
}
