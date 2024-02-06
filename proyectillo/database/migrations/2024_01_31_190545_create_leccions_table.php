<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leccion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idgrupo');
            $table->foreignId('idmodulo');
            $table->foreignId('idprofesor');
            $table->integer('horas');
            $table->timestamps();
            
            $table-> foreign ('idgrupo')->references('id')->on('grupo');
            $table-> foreign ('idmodulo')->references('id')->on('modulo');
            $table-> foreign ('idprofesor')->references('id')->on('profesor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leccions');
    }
};
