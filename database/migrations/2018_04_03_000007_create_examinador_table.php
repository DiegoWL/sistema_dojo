<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminadorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'examinador';

    /**
     * Run the migrations.
     * @table examinador
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
        $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->string('dojo', 100)->nullable();
            $table->string('firma', 100)->nullable();
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
