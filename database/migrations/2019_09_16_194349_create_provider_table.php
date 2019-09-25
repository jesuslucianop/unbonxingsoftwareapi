<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateproviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('page');
            $table->string('email')->unique();
            $table->string('extension');
            $table->string('zipcode');
            $table->integer('id_location')->unsigned();
            $table->string('notification');
            $table->integer('id_currency')->unsigned();
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
