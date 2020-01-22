<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NonMedication extends Model
{
    //
    protected $table = 'NonMedications';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function pharmacyNonMedications()
    {
        return $this->hasMany(PharmacyNonMedication::class, 'nonMedicationId');
    }

    public function nonMedicationSuppliers()
    {
        return $this->hasMany(NonMedicationSupplier::class, 'nonMedicationId');
    }

   

   

}