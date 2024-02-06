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
        Schema::create('modulo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idformacion');
            $table->string('denominacion',100);
            $table->string('siglas',10);
            $table->string('curso',50);
            $table->integer('horas');
            $table->string('especialidad',100);
            $table->timestamps();
            $table-> foreign ('idformacion')->references('id')->on('formacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulos');
    }
};
