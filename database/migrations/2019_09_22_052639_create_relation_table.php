<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* ##############################  Table users  ################################# */
        Schema::table('users', function (Blueprint $table) {
         
      
            //relaciones
    $table->foreign('id_role')->references('id')->on('role');
               
    $table->foreign('id_status')->references('id')->on('status');
    // end
});
/* ##############################  end users  ################################# */


  /* ##############################  Table article  ################################# */
  Schema::table('article', function (Blueprint $table) {
                   //relaciones
                   $table->foreign('id_provider')->references('id')->on('provider');
               
                   $table->foreign('id_departament')->references('id')->on('departament');
                   // end
});
/* ##############################  end article  ################################# */


  /* ##############################  Table departament  ################################# */
  Schema::table('departament', function (Blueprint $table) {
    //relaciones

    //$table->foreign('id_departament')->references('id')->on('departament');
    // end
});
/* ##############################  end departament  ################################# */



  /* ##############################  Table purcharse  ################################# */
  Schema::table('purcharse', function (Blueprint $table) {
                       //relaciones
                       $table->foreign('id_article')->references('id')->on('status');
               
                       $table->foreign('id_user')->references('id')->on('users');
                   
                       $table->foreign('id_tax')->references('id')->on('tax');
                       // end
});
/* ##############################  end purcharse  ################################# */



  /* ##############################  Table invoice  ################################# */
  Schema::table('invoice', function (Blueprint $table) {
                                //relaciones
                                $table->foreign('id_user')->references('id')->on('users');
                                $table->foreign('id_type_payment')->references('id')->on('Payment_type');
                                $table->foreign('id_tax')->references('id')->on('tax');
                                $table->foreign('id_status')->references('id')->on('status');
                                $table->foreign('id_client')->references('id_client')->on('client');
                                // end                          
});
/* ##############################  end invoice  ################################# */


  /* ##############################  Table provider  ################################# */
  Schema::table('provider', function (Blueprint $table) {
         //relaciones
         $table->foreign('id_currency')->references('id')->on('currency');
         $table->foreign('id_status')->references('id')->on('status');
         $table->foreign('id_location')->references('id')->on('location');
    // end                          
});
/* ##############################  end provider  ################################# */


  /* ##############################  Table role  ################################# */
  Schema::table('role', function (Blueprint $table) {
  
     //relaciones
   $table->foreign('id_status')->references('id')->on('status');
// end                          
});
/* ##############################  end role  ################################# */


/* ##############################  Table invoice_detail  ################################# */
Schema::table('invoice_detail', function (Blueprint $table) {
  
    //relaciones
      //$table->foreign('id_article')->references('id')->on('article');
            //$table->foreign('id_invoice')->references('id')->on('invoice');
// end                          
});
/* ##############################  end invoice_detail  ################################# */


/* ##############################  Table Payment_type  ################################# */
Schema::table('Payment_type', function (Blueprint $table) {
  
    //relaciones
    $table->foreign('id_status')->references('id')->on('status');
// end                          
});
/* ##############################  end Payment_type  ################################# */


/* ##############################  Table currency  ################################# */
Schema::table('currency', function (Blueprint $table) {
  
    //relaciones
    $table->foreign('id_status')->references('id')->on('status');
// end                          
});
/* ##############################  end currency  ################################# */



/* ##############################  Table location  ################################# */
Schema::table('location', function (Blueprint $table) {
  
    //relaciones
    $table->foreign('id_location')->references('id')->on('location');
// end                          
});
/* ##############################  end location  ################################# */



/* ##############################  Table client  ################################# */
Schema::table('client', function (Blueprint $table) {
  
    //relaciones
    $table->foreign('id_status')->references('id')->on('status');
// end                          
});
/* ##############################  end client  ################################# */


/* ##############################  Table return  ################################# */
Schema::table('return', function (Blueprint $table) {
  
    //relaciones
   
           // $table->foreign('id_article')->references('id')->on('article');
            //$table->foreign('id_status')->references('id')->on('status');
// end                          
});
/* ##############################  end return  ################################# */











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
