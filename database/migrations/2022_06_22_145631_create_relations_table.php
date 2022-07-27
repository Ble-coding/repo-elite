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
        Schema::create('relations', function (Blueprint $table) {
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
            $table->unsignedbigInteger('general_id')->index();
            $table->timestamps();
            $table->foreign('general_id')->references('id')->on('generals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relations');
    }
};
