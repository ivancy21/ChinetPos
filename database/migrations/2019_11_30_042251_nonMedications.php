<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NonMedications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NonMedications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brandName');  
            $table->string('productCode')->unique();
            $table->float('retailPrice');
            $table->string('nonMedicationPhoto')->nullable();
            $table->tinyInteger('nonMedication_status')->default(1);
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
        Schema::dropIfExists('NonMedications');
    }
}
