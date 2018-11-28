<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefaultContract extends Model
{
    //
    protected $fillable =[
        'name',
        'jabatan',
        'degree',
        'gapok',
        'tunkin',
        'tunjab',
        'tunpresjab',
        'total'
    ];

}
