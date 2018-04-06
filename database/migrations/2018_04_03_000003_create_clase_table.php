<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaseTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'clase';

    /**
     * Run the migrations.
     * @table clase
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre_clase', 45)->nullable();
            $table->string('horario', 45)->nullable();
            $table->integer('alumno_id');

            $table->index(["alumno_id"], 'fk_clase_alumno1_idx');


            $table->foreign('alumno_id', 'fk_clase_alumno1_idx')
                ->references('id')->on('alumno')
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
