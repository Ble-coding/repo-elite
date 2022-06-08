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
        Schema::create('particuliers', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('prename');
            $table->string('datenaiss');
            $table->string('lieu');
            $table->string('tel');
            $table->string('email');
            $table->string('nationnalite');
            // $table->string('sexe');
            $table->enum('sexe',['F','M'])->default('M');
            // $table->bigInteger('user_id');
            $table->string('lieu_habitation');
            // $table->string('situation');
            $table->enum('situation',['Marie','Celibataire'])->default('Celibataire');
            $table->string('successeur_name')->nullable();
            $table->string('successeur_prename')->nullable();
            $table->string('successeur_tel')->nullable();
            $table->string('personne_name')->nullable();

            $table->string('prof');
            $table->string('nom_ent');
            $table->string('address');
            $table->string('tel_ent');
            $table->string('date_deb');

            $table->unsignedbigInteger('user_id')->index();

            $table->string('personne_prename')->nullable();
            $table->string('personne_tel')->nullable();
            $table->unsignedbigInteger('piece_id')->index();
            $table->unsignedbigInteger('type_id')->index();
            $table->string('numpiece')->unique();
            $table->string('dateexp');

            $table->binary('image')->nullable();
            $table->bigInteger('status')->default(1);
            $table->timestamps();


            $table->foreign('piece_id')->references('id')->on('pieces');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('particuliers');
    }
};
