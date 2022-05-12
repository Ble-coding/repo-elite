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
        Schema::create('diminishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('forfait_id')->index();
            $table->string('montant');
            $table->string('investiman');
            // $table->enum('choix',['Oui','Non'])->default('Non');
            $table->enum('jalon',['Oui','Non'])->default('Non');
            // $table->string('suppleant')->nullable();
            // $table->string('bonus')->nullable();
            $table->bigInteger('code_inv');
            $table->bigInteger('user_id');
            // $table->enum('status',['cours','retirer'])->default('cours');
            $table->timestamps();
            $table->foreign('forfait_id')->references('id')->on('forfaits');
            
        });
    }


    
        //     // $table->unsignedbigInteger('customer_id')->index();
        //     $table->unsignedbigInteger('forfait_id')->index();
        //    // $table->unsignedbigInteger('investissement_id')->index();
        //     // $table->unsignedbigInteger('somme_id')->index();
        //     $table->string('montant');
        //     $table->enum('jalon',['Oui','Non'])->default('Non');
        //     $table->string('customer');
        //     $table->bigInteger('code_inv');
     
        //     // $table->unsignedbigInteger('suppleant_id')->index();
        //     $table->timestamps();
            
        //     // $table->foreign('somme_id')->references('id')->on('sommes');
        //     // $table->foreign('investissement_id')->references('id')->on('investissements');
        //     // $table->foreign('customer_id')->references('id')->on('customers');
        //     $table->foreign('forfait_id')->references('id')->on('forfaits');
        //     // $table->foreign('suppleant_id')->references('id')->on('suppleants');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diminishes');
    }
};
