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
        Schema::create('sods', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedbigInteger('society_id')->index();
    
            $table->string('montantD');
            $table->string('montantR');
            $table->string('rendu');
            $table->string('name_deposant')->nullable();
            $table->string('prename_deposant')->nullable();
            $table->string('tel_deposant')->nullable();
            $table->string('add_deposant');
            $table->string('motif');
            $table->unsignedbigInteger('piece_id');
            $table->string('numpiece')->nullable();
            $table->string('reference');
            // $table->bigInteger('timbre')->default(100);
            $table->enum('timbre',['Oui','Non'])->default('Non');
          
           

            $table->timestamps();
            
            $table->foreign('piece_id')->references('id')->on('pieces');

            $table->foreign('society_id')->references('id')->on('societies');
           
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sods');
    }
};
