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
        Schema::create('solds', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('entreprise_id')->index();
            $table->string('montantD');
            $table->string('montantR');
            $table->unsignedbigInteger('actif')->default(1);
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
            // $table->bigInteger('user_id');
           

            $table->timestamps();
            
            $table->foreign('piece_id')->references('id')->on('pieces');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solds');
    }
};
