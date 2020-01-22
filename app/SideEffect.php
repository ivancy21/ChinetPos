<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SideEffect extends Model
{
    //
    protected $table = 'SideEffects';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function medicineSideEffects()
    {
        return $this->hasMany(MedicineSideEffect::class, 'sideEffectsId');
    }

    
 
}
