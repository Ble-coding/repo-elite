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
        Schema::create('cannexes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_preteur');
            $table->string('monnaie');
            $table->string('objet_pret');
            $table->string('montant_origine');
            $table->string('solde');
            $table->string('tauxR');
            $table->string('echeance');

            $table->string('nom_preteur1');
            $table->string('monnaie1');
            $table->string('objet_pret1');
            $table->string('montant_origine1');
            $table->string('solde1');
            $table->string('tauxR1');
            $table->string('echeance1');

            $table->string('nom_preteur2');
            $table->string('monnaie2');
            $table->string('objet_pret2');
            $table->string('montant_origine2');
            $table->string('solde2');
            $table->string('tauxR2');
            $table->string('echeance2');

            $table->string('nom_preteur3');
            $table->string('monnaie3');
            $table->string('objet_pret3');
            $table->string('montant_origine3');
            $table->string('solde3');
            $table->string('tauxR3');
            $table->string('echeance3');


            $table->unsignedbigInteger('main_id')->index();
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
        Schema::dropIfExists('cannexes');
    }
};
