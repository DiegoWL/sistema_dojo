<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetidorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'competidor';

    /**
     * Run the migrations.
     * @table competidor
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('peso')->nullable();
            $table->string('categoria', 45)->nullable();
            $table->string('modalidad', 45)->nullable();
            $table->integer('alumno_id');

            $table->index(["alumno_id"], 'fk_competidor_alumno1_idx');


            $table->foreign('alumno_id', 'fk_competidor_alumno1_idx')
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
