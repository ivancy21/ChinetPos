<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medicines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('formulationId');
            $table->string('brandName');  
            $table->string('productCode')->unique();
            $table->string('dosage');  
            $table->string('genericName');
            $table->float('retailPrice');
            $table->string('medicinePhoto')->nullable();
            $table->tinyInteger('medicine_status')->default(1);
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
        Schema::dropIfExists('Medicines');
    }
}
