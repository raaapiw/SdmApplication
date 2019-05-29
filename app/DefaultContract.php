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

    protected $appends =[
        'real_jabatan',
        'real_degree'
    ];

    public function getRealDegreeAttribute()
    {
        if($this->degree == 1){
            $real_name = 'SMA/Sederajat';
            return $real_name;
        }else if($this->degree == 2){
            $real_name = 'S1';
            return $real_name;
        }else if($this->degree == 3){
            $real_name = 'S2';
            return $real_name;
        }else{
            $real_name = 'D3';
            return $real_name;
        }
        
    }

    public function getRealJabatanAttribute()
    {
        if($this->degree == 1){
            $real_name = 'Adop';
            return $real_name;
        }else if($this->degree == 2){
            $real_name = 'Adum';
            return $real_name;
        }else if($this->degree == 3){
            $real_name = 'Surveyor';
            return $real_name;
        }else if($this->degree == 4){
            $real_name = 'Kepala Sektor';
            return $real_name;
        }
        
    }

}
