<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //on creer la    table  exchanges_types
        Schema::create('exchanges_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 255);
        });

//on oublie pas de rajouter la cle etranger pour id_exchange_types
        Schema::table('exchanges', function($table) { 
            $table->foreign('id_exchange_types')->references('id')->on('exchanges_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       


        Schema::dropIfExists('exchanges_types');
    }
}
