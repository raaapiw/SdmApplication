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
}
