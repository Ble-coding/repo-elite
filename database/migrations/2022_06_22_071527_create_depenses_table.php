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
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->string('vers_hyp')->nullable();
            $table->string('loyers')->nullable();
            $table->string('impt_loc')->nullable();
            $table->string('prime')->nullable();
            $table->string('carte_credit')->nullable();
            $table->string('rembourse')->nullable();
            $table->string('pret_conso')->nullable();
            $table->string('pension')->nullable();
            $table->string('elect')->nullable();
            $table->string('transport')->nullable();
            $table->string('frais')->nullable();
            $table->string('nourritur')->nullable();
            $table->string('epargne_mens')->nullable();
            $table->string('autre_dep')->nullable();
            $table->string('tot_dep')->nullable();
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
        Schema::dropIfExists('depenses');
    }
};
