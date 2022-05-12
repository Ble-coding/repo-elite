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
        Schema::create('rachats', function (Blueprint $table) {
            $table->id();
            $table->string('montant'); ;
            $table->enum('payment',['Unique','Tranche'])->default('Tranche');
            // $table->bigInteger('vente_id');
            $table->unsignedbigInteger('vente_id')->index();
            // $table->unsignedbigInteger('visiteur_id')->index();
            
            $table->unsignedbigInteger('user_id');
          
            $table->timestamps();

            // $table->foreign('visiteur_id')->references('id')->on('visiteurs');
            $table->foreign('vente_id')->references('id')->on('ventes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rachats');
    }
};
