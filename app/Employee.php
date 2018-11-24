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
        'degree',
        'payroll',
        'state',
        'jabatan',
        'wilayah',
        'no_perjanjian',
        'religion',
        'cabang_bank',
        'norek',
        'nama_bank',
        'tgl_ijazah',
        'npwp',
        'bpjs_kt',
        'bpjs_pensiun',
        'no_ktp',
        'istri_suami',
        'anak_1',
        'anak_2',
        'anak_3',
        'bpjs_kes',
        'bpjs_kes_istri_suami',
        'bpjs_kes_anak1',
        'bpjs_kes_anak2',
        'bpjs_kes_anak3',
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
