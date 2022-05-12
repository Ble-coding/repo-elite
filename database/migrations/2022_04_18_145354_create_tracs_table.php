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
        Schema::create('tracs', function (Blueprint $table) {
            $table->id();
            $table->string('montantB');
            // $table->string('montant');
            $table->string('investiman');
            $table->unsignedbigInteger('customer_id')->index()->nullable();
            $table->string('bonus')->nullable();
             $table->string('total');
          
            $table->timestamps();
            // $table->foreign('forfait_id')->references('id')->on('forfaits');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracs');
    }
};
