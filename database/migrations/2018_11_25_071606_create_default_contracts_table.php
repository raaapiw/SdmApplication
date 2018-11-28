<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('degree')->nullable();
            $table->integer('gapok')->nullable();
            $table->integer('tunkin')->nullable();
            $table->integer('tunjab')->nullable();
            $table->integer('tunpresjab')->nullable();
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('default_contracts');
    }
}
