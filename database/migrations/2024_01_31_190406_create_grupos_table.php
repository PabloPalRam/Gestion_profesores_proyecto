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
        Schema::create('grupo', function (Blueprint $table) {
            $table->id();
            $table->integer('cursoescolar');
            $table->foreignId('idformacion');
            $table->string('curso',70);
            $table->string('denominacion',70);
            $table->string('turno',50);
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
        Schema::dropIfExists('grupos');
    }
};
