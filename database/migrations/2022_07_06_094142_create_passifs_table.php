<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passifs', function (Blueprint $table) {
            $table->id();
            $table->string('pretB')->nullable(); 
            $table->string('biens')->nullable();
            $table->string('carteCredit')->nullable();
            $table->string('carteCredit1')->nullable();  
            $table->string('carteCredit2')->nullable(); 
            $table->string('autres')->nullable();
            $table->string('autres1')->nullable();
            $table->string('passife')->nullable();
            $table->string('valeur')->nullable();
            $table->enum('diverses',['Oui','Non'])->nullable();
            $table->enum('cosigne',['Oui','Non'])->nullable();
            $table->string('nature')->nullable();
            $table->string('mt')->nullable();




            $table->unsignedbigInteger('main_id')->index()->nullable();
            $table->timestamps();
            $table->foreign('main_id')->references('id')->on('mains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passifs');
    }
};
