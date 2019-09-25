<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id_client');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone');
            $table->integer('code_client')->unsigned();
            $table->integer('id_status')->unsigned();
            $table->integer('notification')->unsigned();
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
