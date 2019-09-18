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
            $table->bigInteger('id_article');
            $table->date('date_input');
            $table->bigInteger('id_state');
            $table->bigInteger('id_user');
            $table->string('mount');
            $table->bigInteger('id_tax');
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
