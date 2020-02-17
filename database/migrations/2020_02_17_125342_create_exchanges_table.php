<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 255);
            $table->string('commentaire', 255);


         
//on crrer des champs vides
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_clients');
            $table->unsignedBigInteger('id_exchange_types');

            $table->timestamps();
        });


//on choisit la table dans laquelle on veut travailler
        Schema::table('exchanges', function($table) {
            //assign les champs vide a des foreign key
            //id _users fait reference a l id dans la table users
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_clients')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

       
    Schema::table('exchanges', function (Blueprint $table) {
     
        Schema::disableForeignKeyConstraints();
        //supprime 
        $table->dropIfExists('id_users');
        $table->dropIfExists('id_clients');
      
      

       Schema::enableForeignKeyConstraints();
   });

  Schema::dropIfExists('exchanges');
    }








    
}
