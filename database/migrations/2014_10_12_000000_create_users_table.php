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
            $table->string('name');
            $table->string('Lastname');
            $table->string('Username');
            $table->string('password');
            $table->string('email')->unique();
            $table->text('Adress');
            $table->string('Phone');
            $table->string('identification_card');
            $table->bigInteger('Employee_Code');
            $table->unsignedInteger('id_rol');
            $table->bigInteger('id_estatus');
            $table->date('date_created_at');
            $table->bigInteger('user_crea');
            $table->date('date_edit');
            $table->bigInteger('user_edit');
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
