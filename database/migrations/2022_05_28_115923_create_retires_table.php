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
        Schema::create('retires', function (Blueprint $table) {
            $table->id();
            // $table->unsignedbigInteger('caisse_id')->index();
            $table->string('montant');
            $table->string('motif');
            $table->string('code');
            $table->string('name_debiteur');
            $table->timestamps();
            // $table->foreign('caisse_id')->references('id')->on('caisses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retires');
    }
};
