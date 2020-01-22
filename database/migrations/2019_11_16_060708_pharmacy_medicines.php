<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PharmacyMedicines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PharmacyMedicines', function (Blueprint $table) {
            $table->increments('id');
            $table->Unsignedinteger('medicineId');
            $table->Unsignedinteger('pharmacyId');
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
        Schema::dropIfExists('PharmacyMedicines');
    }
}
