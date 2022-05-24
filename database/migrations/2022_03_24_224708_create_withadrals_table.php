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
        Schema::create('withadrals', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('sold_id')->index();
       
            $table->string('montant');
            $table->string('name_retirant');
            $table->string('prename_retirant');
            $table->text('motif');
            $table->string('numpiece');
            $table->string('add_retirant');
            $table->string('reference');
            $table->string('tel_retirant');
            $table->unsignedbigInteger('piece_id');
            $table->bigInteger('user_id');
            $table->timestamps();
        

            $table->foreign('sold_id')->references('id')->on('solds');
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
        Schema::dropIfExists('withadrals');
    }
};
