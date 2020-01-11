<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medicine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Medicine', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('formulationId');
            $table->string('brandName')->unique();  
            $table->string('productCode')->unique();
            $table->string('genericName');  
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
        Schema::dropIfExists('Medicine');
    }
}
