<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PharmacyTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PharmacyTransactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pharmacyMedicineId');
            $table->boolean('transaction');
            $table->integer('quantity');
            $table->string('transactionMonth');
            $table->string('transactionDay');
            $table->string('transactionYear');
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
        Schema::dropIfExists('PharmacyTransactions');
    }
}
