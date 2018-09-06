<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable =[
        'name',
        'start_date',
        'end_date'
    ];

    
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    
}
