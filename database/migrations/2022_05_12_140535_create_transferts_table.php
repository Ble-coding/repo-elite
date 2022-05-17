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
        Schema::create('transferts', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('envoie_id')->index();

            $table->unsignedbigInteger('solde_id')->index()->nullable();
            $table->unsignedbigInteger('sode_id')->index()->nullable();
            $table->unsignedbigInteger('somme_id')->index()->nullable();
           
            $table->unsignedbigInteger('reception_id')->index();
            $table->unsignedbigInteger('olde_id')->index()->nullable();
            $table->unsignedbigInteger('ode_id')->index()->nullable();
            $table->unsignedbigInteger('omme_id')->index()->nullable();


            $table->unsignedbigInteger('user_id');
            $table->string('code');
            $table->string('montant');
            $table->timestamps();

            $table->foreign('envoie_id')->references('id')->on('envoies');

            $table->foreign('solde_id')->references('id')->on('soldes');
            $table->foreign('sode_id')->references('id')->on('sodes');
            $table->foreign('somme_id')->references('id')->on('sommes');
            
            $table->foreign('reception_id')->references('id')->on('receptions');

            $table->foreign('olde_id')->references('id')->on('soldes');
            $table->foreign('ode_id')->references('id')->on('sodes');
            $table->foreign('omme_id')->references('id')->on('sommes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transferts');
    }
};
