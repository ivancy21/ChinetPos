<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharmacyMedicine extends Model
{
    //
    protected $table = 'PharmacyMedicines';
    protected $guarded=['id','created_at','updated_at'

    ];
    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicineId');
    }

    public function noneMedication()
    {
        return $this->belongsTo(NoneMedication::class, 'medicineId');
    }

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class,'pharmacyId');
    }
    
    public function pharmacyTransactions()
    {
        return $this->hasMany(PharmacyTransaction::class,'pharmacyMedicineId');
    }
    
}
