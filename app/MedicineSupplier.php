<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineSupplier extends Model
{
    //
    protected $table = 'MedicineSuppliers';
    protected $guarded =['id','created_at','updated_at'
    ];

   
    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicineId');
    }

    public function nonMedication()
    {
        return $this->belongsTo(Medicine::class, 'medicineId');
    }

    
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplierId');
    }

}
