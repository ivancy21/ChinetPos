<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoneMedication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NoneMedication', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brandName');  
            $table->string('productCode')->unique();
            $table->float('retailPrice');
            $table->string('noneMedicationPhoto')->nullable();
            $table->tinyInteger('noneMedication_status')->default(1);
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
        Schema::dropIfExists('NoneMedication');
    }
}
