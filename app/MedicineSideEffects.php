<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineSideEffects extends Model
{
    //
    protected $table = 'MedicineSideEffects';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function medicineUses()
    {
        return $this->hasMany(MedicineUse::class, 'medicineSideEffectsId','sideEffect');
    }

    public function sideEffect()
    {
        return $this->belongsTo(SideEffects::class, 'sideEffectsId');
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicineId');
    }

}
