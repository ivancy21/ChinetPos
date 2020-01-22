<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharmacyNonMedication extends Model
{
    //
    protected $table = 'PharmacyNonMedications';
    protected $guarded=['id','created_at','updated_at'

];
public function nonMedication()
{
    return $this->belongsTo(NonMedication::class, 'nonMedicationId');
}


public function pharmacy()
{
    return $this->belongsTo(Pharmacy::class,'pharmacyId');
}

public function pharmacyTransactions()
{
    return $this->hasMany(PharmacyTransaction::class,'pharmacyNonMedicationId');
}

}

