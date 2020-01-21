<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SideEffects extends Model
{
    //
    protected $table = 'SideEffects';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function medicineSideEffects()
    {
        return $this->hasMany(MedicineSideEffects::class, 'sideEffectsId');
    }

    
 
}
