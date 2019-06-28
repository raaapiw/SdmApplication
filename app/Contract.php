<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable =[
        'employee_id',
        'name',
        'start_date',
        'end_date',
        'plafon',
        'gapok',
        'tunjangan_kinerja',
        'tunjangan_jabatan',
        'tunjangan_presjab',
        'gatot',
        'evidence',
        'noperj',
        'tahun',
        'kind'
    ];

    
    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function facilities(){
        return $this->hasMany(Facility::class);
    }
    
}
