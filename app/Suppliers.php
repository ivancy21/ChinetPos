<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //
    protected $table = 'Suppliers';
    protected $guarded =['id','created_at','updated_at'
    ];

    
    public function medicineSuppliers()
    {
        return $this->hasMany(MedicineSuppliers::class, 'suppliersId');
    }

    
}
