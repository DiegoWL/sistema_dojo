<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'examen';

    /**
     * Run the migrations.
     * @table examen
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('fecha')->nullable();
            $table->string('observacion', 100)->nullable();
            $table->unsignedInteger('alumno_id');
            $table->unsignedInteger('examinador_id');
            $table->integer('grado_id')->unsigned();

        });

        Schema::table($this->set_schema_table, function($table) {
          $table->foreign('alumno_id')->references('id')->on('alumno')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('examinador_id')->references('id')->on('examinador')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('grado_id')->references('id')->on('grado')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::table($this->set_schema_table, function(Blueprint $table) {
               $table->dropForeign('alumno_id');
               $table->dropForeign('examinador_id');
               $table->dropForeign('grado_id');
       });
       Schema::dropIfExists($this->set_schema_table);
     }
}
