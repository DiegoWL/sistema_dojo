<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'alumno';

    /**
     * Run the migrations.
     * @table alumno
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('rut', 100)->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('apellido', 100)->nullable();
            $table->dateTime('fecha_nac')->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('actividad', 100)->nullable();
            $table->string('telefono', 100)->nullable();
            $table->string('fono_emerg', 100)->nullable();
            $table->string('apoderado', 100)->nullable();
            $table->dateTime('fecha_ingreso')->nullable();
            $table->string('observacion', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
