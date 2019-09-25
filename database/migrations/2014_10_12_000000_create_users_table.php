<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createuserstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('phone');
            $table->string('identification_card');
            $table->integer('code_employee');
            $table->integer('id_role')->unsigned();
            $table->integer('id_status')->unsigned();
            $table->date('create_at');
            $table->integer('create_user');
            $table->date('edit_at');
            $table->integer('edit_user');
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
        Schema::dropIfExists('users');
    }
}
