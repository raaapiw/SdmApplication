<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nik');
            $table->string('name');
            $table->string('address');
            $table->string('graduated_from');
            $table->string('degree');
            $table->string('payroll');
            $table->string('jabatan');
            $table->string('wilayah');
            $table->string('no_perjanjian');
            $table->string('religion');
            $table->string('cabang_bank');
            $table->string('norek');
            $table->string('nama_bank');
            $table->string('tgl_ijazah');
            $table->string('npwp');
            $table->string('bpjs_kt');
            $table->string('bpjs_pensiun');
            $table->string('no_ktp');
            $table->string('istri_suami');
            $table->string('anak_1');
            $table->string('anak_2');
            $table->string('anak_3');
            $table->string('bpjs_kes');
            $table->string('bpjs_kes_istri_suami');
            $table->string('bpjs_kes_anak1');
            $table->string('bpjs_kes_anak2');
            $table->string('bpjs_kes_anak3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
