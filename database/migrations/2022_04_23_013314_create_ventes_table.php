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
        Schema::create('ventes', function (Blueprint $table) {
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
            
            $table->unsignedbigInteger('user_id');


            $table->string('immatricule');
            $table->string('carte_grise');
            $table->string('marque');
            $table->string('model');
            $table->string('couleur');
            $table->string('circulation');

            $table->enum('payment',['Unique','Tranche'])->default('Tranche');
            $table->string('montant');
            $table->string('contrat');
            $table->bigInteger('status')->default(2);
            $table->string('compteur');
            $table->string('duree');
            $table->dateTime('date_termine')->nullable();
          
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
        Schema::dropIfExists('ventes');
    }
};
