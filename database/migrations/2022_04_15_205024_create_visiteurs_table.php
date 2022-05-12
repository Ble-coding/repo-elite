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
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('prename');
            $table->string('tel');
            $table->string('adresse');
            $table->string('email');
            $table->string('nationnalite');
            $table->enum('sexe',['F','M'])->default('M');
            $table->string('numpiece');
            $table->string('dateexp');
            $table->unsignedbigInteger('piece_id')->index();
            
            $table->unsignedbigInteger('user_id')->index();
         
            
            // $table->binary('image')->nullable();
            $table->timestamps();


            $table->foreign('piece_id')->references('id')->on('pieces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiteurs');
    }
};
