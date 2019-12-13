<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    //
    protected $table = 'Pos';
    protected $guarded=['id','created_at','updated_at'
    ];

    public function remove()
    {
        return $this->belongsTo(Medicine::class, 'pharmacyMedicineId');
    }

}

