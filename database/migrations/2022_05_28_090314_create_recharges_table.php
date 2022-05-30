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
        Schema::create('recharges', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('credit_id')->index();
            $table->unsignedbigInteger('caisse_id')->index();
            $table->string('code');
            $table->string('montant');
            $table->timestamps();


            $table->foreign('credit_id')->references('id')->on('credits');
            $table->foreign('caisse_id')->references('id')->on('caisses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recharges');
    }
};
