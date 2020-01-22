<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'Suppliers';
    protected $guarded =['id','created_at','updated_at'
    ];

    
    public function medicineSuppliers()
    {
        return $this->hasMany(MedicineSupplier::class, 'supplierId');
    }

    
}
