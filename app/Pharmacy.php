<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    //
    protected $table = 'Pharmacy';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function pharmacyMedicines()
    {
        return $this->hasMany(PharmacyMedicine::class, 'pharmacyId');
    }

    
 
}
