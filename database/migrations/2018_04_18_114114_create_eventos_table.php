<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */




    public function up()
    {
        //if (Schema::hasTable('eventos')) return
        Schema::create('evento', function (Blueprint $table) {
            //
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->integer('precio')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
