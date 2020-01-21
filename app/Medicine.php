<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //
    protected $table = 'Medicine';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function pharmacyMedicines()
    {
        return $this->hasMany(PharmacyMedicine::class, 'medicineId');
    }

    public function medicineSuppliers()
    {
        return $this->hasMany(MedicineSuppliers::class, 'medicineId');
    }

    public function medicineUses()
    {
        return $this->hasMany(MedicineUse::class, 'medicineId');
    }

    public function medicineSideEffects()
    {
        return $this->hasMany(MedicineSideEffects::class, 'medicineId');
    }

    public function formulation()
    {
        return $this->belongsTo(Formulation::class, 'formulationId');
    }

}
