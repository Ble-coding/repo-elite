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
        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
            $table->string('montantB');
            // $table->string('montant');
            // $table->string('investiman');
            $table->unsignedbigInteger('customer_id')->index()->nullable();
            $table->unsignedbigInteger('particulier_id')->index()->nullable();
            $table->unsignedbigInteger('client_id')->index()->nullable();
            $table->unsignedbigInteger('intervenant_id')->index()->nullable();
            $table->string('bonus')->nullable();

            //  $table->string('retire');
             $table->string('total');
            //  $table->string('soustract');
            //  $table->dateTime('date_termine')->nullable();
            $table->timestamps();
            // $table->foreign('forfait_id')->references('id')->on('forfaits');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('intervenant_id')->references('id')->on('customers');
            $table->foreign('particulier_id')->references('id')->on('particuliers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonuses');
    }
};
