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

 
}
