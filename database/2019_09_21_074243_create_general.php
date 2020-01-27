<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('description');
            $table->rememberToken();
            $table->timestamps();
        });
       

        Schema::create('role', function (Blueprint $table) {
    $table->increments('id');
    $table->string('role');
    $table->string('description');
    $table->integer('id_status')->unsigned();
    $table->rememberToken();
    $table->timestamps();

                         //relaciones

});
 Schema::table('role', function (Blueprint $table) {
            //relaciones
            $table->foreign('id_status')->references('id')->on('status');
        });
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
    $table->integer('id_role')->unsigned();
    $table->integer('id_status')->unsigned();
    $table->date('create_at');
    $table->bigInteger('create_user');
    $table->date('edit_at');
    $table->bigInteger('edit_user');
    $table->rememberToken();
    $table->timestamps();


// end
});


Schema::table('users', function (Blueprint $table) {
    //relaciones
    $table->foreign('id_role')->references('id')->on('role');
       
    $table->foreign('id_status')->references('id')->on('status');
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
