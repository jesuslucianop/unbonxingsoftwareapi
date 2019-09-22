<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purcharse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_article')->unsigned();
            $table->date('create_at');
            $table->integer('id_status')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('mount');
            $table->integer('id_tax')->unsigned();
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
