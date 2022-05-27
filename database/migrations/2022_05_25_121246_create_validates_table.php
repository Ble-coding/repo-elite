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
        Schema::create('validates', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('transfert_id')->index();

            $table->unsignedbigInteger('send_id')->index();

            $table->unsignedbigInteger('solde_id')->index()->nullable();
            $table->unsignedbigInteger('sold_id')->index()->nullable();
            $table->unsignedbigInteger('sode_id')->index()->nullable();
            $table->unsignedbigInteger('sod_id')->index()->nullable();
            $table->unsignedbigInteger('credit_id')->index()->nullable();
            
            
           
            $table->unsignedbigInteger('receive_id')->index();
            $table->unsignedbigInteger('olde_id')->index()->nullable();
            $table->unsignedbigInteger('old_id')->index()->nullable();
            $table->unsignedbigInteger('ode_id')->index()->nullable();
            $table->unsignedbigInteger('od_id')->index()->nullable();
            $table->unsignedbigInteger('redit_id')->index()->nullable();
            // $table->unsignedbigInteger('omme_id')->index()->nullable();



            $table->string('code');
            $table->string('montant');
            $table->timestamps();

            $table->foreign('send_id')->references('id')->on('sends');

            $table->foreign('solde_id')->references('id')->on('soldes');
            $table->foreign('sold_id')->references('id')->on('solds');
            $table->foreign('sode_id')->references('id')->on('sodes');
            $table->foreign('sod_id')->references('id')->on('sods');
            $table->foreign('credit_id')->references('id')->on('credits');
            
            $table->foreign('receive_id')->references('id')->on('receives');

            $table->foreign('olde_id')->references('id')->on('soldes');
            $table->foreign('old_id')->references('id')->on('solds');
            $table->foreign('ode_id')->references('id')->on('sodes');
            $table->foreign('od_id')->references('id')->on('sods');
            $table->foreign('redit_id')->references('id')->on('credits');

            $table->foreign('transfert_id')->references('id')->on('transferts');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validates');
    }
};
