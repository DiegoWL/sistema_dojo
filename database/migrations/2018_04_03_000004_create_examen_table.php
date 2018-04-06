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
            $table->integer('examinador_id');
            $table->integer('alumno_id');
            $table->integer('grado_id');

            $table->index(["alumno_id"], 'fk_examen_alumno1_idx');

            $table->index(["grado_id"], 'fk_examen_grado1_idx');

            $table->index(["examinador_id"], 'fk_Examen_Examinador1_idx');


            $table->foreign('examinador_id', 'fk_Examen_Examinador1_idx')
                ->references('id')->on('examinador')
                ->onDelete('no action')
                ->onUpdate('no action')
                ->unsigned();

            $table->foreign('alumno_id', 'fk_examen_alumno1_idx')
                ->references('id')->on('alumno')
                ->onDelete('no action')
                ->onUpdate('no action')
                ->unsigned();

            $table->foreign('grado_id', 'fk_examen_grado1_idx')
                ->references('id')->on('grado')
                ->onDelete('no action')
                ->onUpdate('no action')
                ->unsigned();
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
