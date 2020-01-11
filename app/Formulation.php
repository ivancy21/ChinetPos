<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulation extends Model
{
    //
    protected $table = 'Formulation';
    protected $guarded =['id','created_at','updated_at'
    ];

    public function medicines()
    {
        return $this->hasMany(Medicine::class, 'formulationId');
    }

    
 
}
