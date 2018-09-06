<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable =[
        'name',
        'address',
        'nik',
        'graduated_from',
        'degree'
    ];

    public function contracts(){
        return $this->hasMany(Contract::class);
    }
    
    public function facilities(){
        return $this->hasMany(Facility::class);
    }

    public function trainings(){
        return $this->hasMany(Training::class);
    }
}
