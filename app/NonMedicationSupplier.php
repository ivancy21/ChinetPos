<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NonMedicationSupplier extends Model
{
    //
    protected $table = 'NonMedicationSuppliers';
    protected $guarded =['id','created_at','updated_at'
    ];

   
    

    public function nonMedication()
    {
        return $this->belongsTo(NonMedication::class, 'nonMedicationId');
    }

    
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplierId');
    }

}