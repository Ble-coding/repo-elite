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
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->string('siege');
            // $table->string('nc');
            $table->string('nr')->unique();
            // $table->string('ri');
            $table->string('name');
            $table->string('cam');
            $table->string('caa');
            // $table->string('partner');
             $table->enum('partner',['Oui','Non'])->default('Non');
            // $table->string('payment');
            $table->enum('payment',['Oui','Non'])->default('Non');
            // $table->string('credit');
            $table->enum('credit',['Oui','Non'])->default('Non');
            // $table->unsignedbigInteger('secteur_id');
            $table->string('secteur');
            $table->string('name_gerant');
            $table->string('prename_gerant');
            $table->string('datenaiss');
            $table->string('lieu');
            $table->string('tel');
            $table->string('tel_ent');
            $table->string('email');
            $table->string('capital');
            $table->string('nationnalite');
            // $table->string('sexe');
            $table->enum('sexe',['F','M'])->default('M');
            $table->string('lieu_habitation');
            // $table->string('situation');
            $table->enum('situation',['Marie','Celibataire'])->default('Celibataire');
            $table->string('code');
            $table->string('name_partner')->nullable();
            $table->string('successeur_name')->nullable();
            $table->string('successeur_prename')->nullable();
            $table->string('successeur_tel')->nullable();
            $table->string('personne_name')->nullable();
            $table->string('personne_prename')->nullable();
            $table->string('personne_tel')->nullable();
            $table->unsignedbigInteger('piece_id')->index();
            $table->unsignedbigInteger('forme_id')->index();
            $table->string('numpiece');
            $table->string('dateexp');
            $table->binary('image')->nullable();
            $table->bigInteger('status')->default(1);
            $table->unsignedbigInteger('user_id');
            $table->timestamps();
        
                    $table->foreign('piece_id')->references('id')->on('pieces');
                    $table->foreign('forme_id')->references('id')->on('formes');
                    // $table->foreign('secteur_id')->references('id')->on('secteurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('societies');
    }
};
