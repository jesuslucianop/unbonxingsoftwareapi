<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departament', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departament');
            $table->integer('id_deparment')->unsigned();
            $table->integer('id_status')->unsigned();
            $table->rememberToken();
            $table->timestamps();

          
               
    
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
