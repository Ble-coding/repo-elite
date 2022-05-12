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
        Schema::create('forfaits', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_Forfait');
            $table->string('duree');
            $table->bigInteger('pourcentageM');
            $table->bigInteger('pourcentageJ');
            $table->string('montantMin');
            $table->string('montantMax');
            // $table->unsignedbigInteger('piece_id')->index();

            $table->timestamps();

          
            // $table->foreign('investissement_id')->references('id')->on('investissements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forfaits');
    }
};
