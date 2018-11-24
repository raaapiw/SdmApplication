<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    //
    protected $fillable =[
        'employee_id',
        'theme',
        'penyelenggara',
        'jadwal',
        'no_sertifikat',
        'biaya'
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    
}
