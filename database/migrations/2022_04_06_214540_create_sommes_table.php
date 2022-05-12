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
        Schema::create('sommes', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('forfait_id')->index();
            $table->string('montant');
            $table->string('investiman');
             $table->enum('choix',['Oui','Non'])->default('Non');
            $table->enum('jalon',['Oui','Non'])->default('Non');
            $table->unsignedbigInteger('customer_id')->index()->nullable();
            $table->string('bonus')->nullable();
            // $table->enum('status',['cours','retirer'])->default('cours');
            $table->bigInteger('status')->default(1);
             $table->bigInteger('compteur');
             $table->string('retire');
             $table->string('total');
             $table->string('soustract');
             $table->dateTime('date_termine')->nullable();
            $table->timestamps();
            $table->foreign('forfait_id')->references('id')->on('forfaits');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }


    
    // $table->unsignedbigInteger('forfait_id')->index();
    // $table->string('montant');
    // $table->string('customer');
    // $table->enum('jalon',['Oui','Non'])->default('Non');
    // // $table->enum('choix',['Oui','Non'])->default('Non');
    // // $table->string('suppleant')->nullable();
    // // $table->string('bonus');
    // $table->enum('status',['cours','retirer'])->default('cours');
    // $table->timestamps();
    // $table->foreign('forfait_id')->references('id')->on('forfaits');

    //     // $table->unsignedbigInteger('customer_id')->index();
    //     // $table->unsignedbigInteger('forfait_id')->index();
    //     // $table->string('montant');
    //     // $table->string('customer');
    //     // $table->string('suppleant');
    //     // // $table->unsignedbigInteger('suppleant_id')->index();
    //     // $table->timestamps();
    
    //     // // $table->foreign('customer_id')->references('id')->on('customers');
    //     // $table->foreign('forfait_id')->references('id')->on('forfaits');
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sommes');
    }
};
