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
            $table->increments('id')->unsigned();
            $table->string('nombre', 45)->nullable();
            $table->string('horario', 45)->nullable();
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
