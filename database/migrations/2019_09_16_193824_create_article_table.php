<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->double('cost', 15, 8);
            $table->double('sale', 15, 8);
            $table->integer('stock')->unsigned();
            $table->integer('id_provider')->unsigned();
            $table->integer('id_departament')->unsigned();
            $table->integer('id_status')->unsigned();
            $table->integer('edit_user')->unsigned();
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
