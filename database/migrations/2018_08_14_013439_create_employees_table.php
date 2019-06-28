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
            $table->increments('id')->unsigned();
            $table->integer('nik')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('graduated_from')->nullable();
            $table->string('degree')->nullable();
            $table->string('payroll')->nullable();
            $table->string('state')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('wilayah')->nullable();
            $table->string('no_perjanjian')->nullable();
            $table->string('religion')->nullable();
            $table->string('cabang_bank')->nullable();
            $table->string('norek')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('tgl_ijazah')->nullable();
            $table->string('npwp')->nullable();
            $table->string('bpjs_kt')->nullable();
            $table->string('bpjs_pensiun')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('istri_suami')->nullable();
            $table->string('anak_1')->nullable();
            $table->string('anak_2')->nullable();
            $table->string('anak_3')->nullable();
            $table->string('bpjs_kes')->nullable();
            $table->string('bpjs_kes_istri_suami')->nullable();
            $table->string('bpjs_kes_anak1')->nullable();
            $table->string('bpjs_kes_anak2')->nullable();
            $table->string('bpjs_kes_anak3')->nullable();
            $table->string('email')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('ttl_anak1')->nullable();
            $table->string('ttl_anak2')->nullable();
            $table->string('ttl_anak3')->nullable();
            $table->string('kelas_bpjs')->nullable();
            $table->string('sex')->nullable();
            
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
