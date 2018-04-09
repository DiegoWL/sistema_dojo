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
            $table->string('concepto', 100)->nullable();
            $table->text('comentario', 100)->nullable();
            $table->integer('alumno_id')->unsigned();
        });
        Schema::table($this->set_schema_table, function($table) {
          $table->foreign('alumno_id')->references('id')->on('alumno')->onDelete('cascade')->onUpdate('cascade');
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
          $table->dropForeign(['alumno_id']);
       });
       Schema::dropIfExists($this->set_schema_table);
     }
}
