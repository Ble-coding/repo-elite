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
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->string('nameResp')->nullable();
            $table->string('prenameResp')->nullable();
            $table->string('addressResp')->nullable();
            $table->string('ville')->nullable();
            $table->string('depuisResp')->nullable();
            $table->string('datenaiss')->nullable();
            $table->string('prof')->nullable();
            $table->string('nationnalite')->nullable();
            $table->string('nbr_dependantResp')->nullable();
            $table->string('tel_residence')->nullable();
            $table->string('bureau')->nullable();
            $table->string('daexp')->nullable();
            $table->unsignedbigInteger('piece_id')->index()->nullable();
            $table->unsignedbigInteger('etat_id')->nullable();
            $table->string('date_mariage')->nullable();
            $table->unsignedbigInteger('regime_id')->index()->nullable();
            $table->string('nom_conjoint')->nullable();
            $table->enum('emprunt',['Oui','Non'])->nullable();
            $table->enum('anterieur',['Yes','No'])->nullable();
            $table->string('where_emprunt')->nullable();
            $table->string('where_anterieur')->nullable();
            $table->unsignedbigInteger('main_id')->index()->nullable();

            $table->timestamps();
            $table->foreign('piece_id')->references('id')->on('pieces');
            $table->foreign('etat_id')->references('id')->on('etats');
            $table->foreign('regime_id')->references('id')->on('regimes');
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
        Schema::dropIfExists('responsables');
    }
};
