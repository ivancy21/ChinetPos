<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicineSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MedicineSuppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('medicineId');
            $table->unsignedInteger('supplierId');
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
        Schema::dropIfExists('MedicineSuppliers');
    }
}
