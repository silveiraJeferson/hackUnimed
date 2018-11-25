<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('beneficiarios', function (Blueprint $table) {
             
            $table->increments('id');
            $table->string('nome');
            $table->string('idade');
            
            $table->string('cpf');
            $table->string('cartao');
            $table->string('cidade');
            
            $table->string('email');
           
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
        Schema::drop('beneficiarios');
    }
}
    
