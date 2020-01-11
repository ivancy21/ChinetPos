<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    //
    protected $table = 'Diagnosis';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function medicineUses()
    {
        return $this->hasMany(MedicineUse::class, 'diagnosisId');
    }

    
 
}
