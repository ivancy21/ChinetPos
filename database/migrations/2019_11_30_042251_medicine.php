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
            $table->string('productCode');
            $table->float('price')->nullable();
            $table->string('name');
            $table->string('genericName');
            $table->string('companyName');
            $table->string('category')->nullable();
            $table->string('sideEffects')->nullable();
            $table->string('medicinePhoto')->nullable();
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
