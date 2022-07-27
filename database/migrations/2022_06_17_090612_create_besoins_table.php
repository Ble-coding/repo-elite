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
        Schema::create('besoins', function (Blueprint $table) {
            $table->id();
            $table->string('montant');
            $table->string('objet');
            $table->string('auto');
            $table->string('elite');
            $table->string('cout');
            $table->unsignedbigInteger('general_id')->index();
            $table->unsignedbigInteger('pret_id')->index();
            $table->timestamps();
            $table->foreign('general_id')->references('id')->on('generals');
            $table->foreign('pret_id')->references('id')->on('prets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('besoins');
    }
};
