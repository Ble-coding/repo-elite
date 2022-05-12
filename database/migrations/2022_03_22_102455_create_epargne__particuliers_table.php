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
    // public function up()
    // {
    //     Schema::create('epargne_particuliers', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->string('prename');
    //         $table->string('datenaiss');
    //         $table->string('lieu');
    //         $table->string('tel');
    //         $table->string('email');
    //         $table->string('nationnalite');
    //         $table->string('sexe');
    //         $table->string('lieu_habitation');
    //         $table->string('situation');
    //         $table->string('successeur_name');
    //         $table->string('successeur_prename');
    //         $table->string('successeur_tel');
    //         $table->string('personne_name');
    //         $table->string('personne_prename');
    //         $table->string('personne_tel');
    //         $table->unsignedbigInteger('piece_id')->index();
    //         $table->string('numpiece');
    //         $table->string('dateexp');
    //         $table->binary('image')->nullable();
    //         $table->string('code')->unique();
    //         $table->timestamps();
            


    //         $table->foreign('piece_id')->references('id')->on('pieces');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epargne__particuliers');
    }
};
