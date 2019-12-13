<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharmacyMedicine extends Model
{
    //
    protected $table = 'PharmacyMedicine';
    protected $guarded=['id','created_at','updated_at'

    ];
    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicineId');
    }

    public function pos()
    {
        return $this->hasMany(Pos::class,'pharmacyMedicineId');
    }
}
