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
        Schema::create('recepts', function (Blueprint $table) {
            $table->id();
            $table->string('montant');
            $table->unsignedbigInteger('intervenant_id')->index()->nullable();
             $table->unsignedbigInteger('godfather_id')->index()->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('code_bonus');

            $table->timestamps();
            $table->foreign('intervenant_id')->references('id')->on('customers');
              $table->foreign('godfather_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recepts');
    }
};
