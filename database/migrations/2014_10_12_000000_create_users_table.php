<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->bigInteger('code_employee');
            $table->unsignedInteger('id_rol');
            $table->bigInteger('id_status');
            $table->date('create_at');
            $table->bigInteger('create_user');
            $table->date('edit_at');
            $table->bigInteger('edit_user');
            $table->rememberToken();
            $table->timestamps();
           
    $table->foreign('id_rol')->references('id')->on('role');
    // ...
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
