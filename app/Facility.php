<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //
    protected $fillable =[

        'contract_id',
        'facility',
    ];
    public function contract(){
        return $this->belongsTo(Contract::class);
    }
}
