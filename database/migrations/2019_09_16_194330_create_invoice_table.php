<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function(Blueprint $table) {
            $table->increments('id');
            $table->string('billing_number');
            $table->integer('id_user')->unsigned();
            $table->integer('id_type_payment')->unsigned();
            $table->date('create_at');
            $table->double('total_invoice', 15, 8);
            $table->integer('id_tax')->unsigned();
            $table->integer('id_status')->unsigned();
            $table->integer('id_client')->unsigned();
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
        
    }
}
