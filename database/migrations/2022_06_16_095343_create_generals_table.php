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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('prename')->nullable();
            // $table->enum('choix',['Nouveau','Existant'])->default('Nouveau')->nullable();
            $table->enum('sexe',['F','M'])->default('M')->nullable();
            $table->string('commune')->nullable();
            $table->string('name_naissance')->nullable();
            $table->string('nationnalite')->nullable();
            $table->string('address')->nullable();
            $table->string('nbr_dependant')->nullable();
            $table->string('depuis')->nullable();
            $table->string('tel_residence')->nullable();
            $table->string('cel')->nullable();
            $table->string('bureau')->nullable();
            $table->string('datenaiss')->nullable();
            $table->string('communeR')->nullable();
            $table->string('prof')->nullable();
            $table->unsignedbigInteger('user_id')->index();
            $table->unsignedbigInteger('piece_id')->index()->nullable();
            $table->unsignedbigInteger('particulier_id')->index()->nullable();
            $table->unsignedbigInteger('client_id')->index()->nullable();
            $table->unsignedbigInteger('customer_id')->index()->nullable();
            $table->unsignedbigInteger('regime_id')->index()->nullable();
            $table->unsignedbigInteger('renseigne_id')->index();
            $table->string('name_fille')->nullable();
            $table->string('prename_fille')->nullable();
            $table->string('email')->nullable();
            $table->unsignedbigInteger('etat_id')->nullable();
            $table->string('date_mariage')->nullable();
            $table->string('nom_conjoint')->nullable();
            $table->unsignedbigInteger('envoie_id')->index()->nullable();
            $table->timestamps();
            $table->foreign('piece_id')->references('id')->on('pieces');
            $table->foreign('regime_id')->references('id')->on('regimes');
            $table->foreign('particulier_id')->references('id')->on('particuliers');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('envoie_id')->references('id')->on('envoies');
            $table->foreign('renseigne_id')->references('id')->on('renseignes');
            $table->foreign('etat_id')->references('id')->on('etats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generals');
    }
};
