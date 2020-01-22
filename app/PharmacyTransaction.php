<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharmacyTransaction extends Model
{
    //
    protected $table = 'PharmacyTransactions';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function pharmacyMedicine()
    {
        return $this->belongsTo(PharmacyMedicine::class, 'pharmacyMedicineId');
    }

    
}
