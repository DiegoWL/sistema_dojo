<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoClaseTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_clase', function (Blueprint $table) {
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumno');
            $table->integer('clase_id')->unsigned();
            $table->foreign('clase_id')->references('id')->on('clase');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::table('alumno_clase', function(Blueprint $table) {
            $table->dropForeign(['alumno_id']);
            $table->dropForeign(['clase_id']);
       });
        Schema::dropIfExists('alumno_clase');
    }
}
