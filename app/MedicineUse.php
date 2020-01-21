<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineUse extends Model
{
    //
    protected $table = 'MedicineUse';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class, 'diagnosisId');
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicineId');
    }

 
}
