<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pago';

    /**
     * Run the migrations.
     * @table pago
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
            $table->integer('estado')->nullable();
            $table->string('concepto', 45)->nullable();
            $table->string('comentario', 45)->nullable();
            $table->integer('alumno_id');

            $table->index(["alumno_id"], 'fk_pago_alumno1_idx')->unsigned();


            $table->foreign('alumno_id', 'fk_pago_alumno1_idx')
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
