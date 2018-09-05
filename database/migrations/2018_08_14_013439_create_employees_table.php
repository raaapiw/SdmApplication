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
            $table->string('contract1');
            $table->string('contract2');
            $table->string('contract3');
            $table->string('contract4');
            $table->string('contract5');
            $table->string('contract6');
            $table->string('contract7');
            $table->string('contract8');
            $table->string('contract9');
            $table->string('contract10');
            $table->string('contract11');
            $table->string('contract12');
            $table->string('contract13');
            $table->string('contract14');
            $table->string('contract15');
            $table->string('contract16');
            $table->string('contract17');
            $table->string('contract18');
            $table->string('contract19');
            $table->string('contract20');
            $table->string('contract21');
            $table->string('contract22');
            $table->string('contract23');
            $table->string('contract24');
            $table->string('contract25');
            $table->string('contract26');
            $table->string('contract27');
            $table->string('contract28');
            $table->string('contract29');
            $table->string('contract30');
            $table->string('payroll');
            $table->string('jabatan');
            $table->string('wilayah');
            $table->string('no_perjanjian');
            $table->string('religion');
            $table->string('cabang_bank');
            $table->string('no_rekening');
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
