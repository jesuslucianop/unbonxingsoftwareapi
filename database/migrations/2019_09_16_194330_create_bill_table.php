<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('bill_number');
            $table->bigInteger('id_user');
            $table->bigInteger('id_tipepayment');
            $table->date('billing_date');
            $table->double('total_billing', 15, 8);
            $table->double('id_tax', 15, 8);
            $table->bigInteger('id_state');
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
