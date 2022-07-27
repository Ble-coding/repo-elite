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
        Schema::create('details', function (Blueprint $table) {
            $table->id(); 
            $table->enum('reprise',['Oui','Non'])->nullable();
            $table->enum('reclamation',['Oui','Non'])->nullable();
            $table->enum('faillite',['Oui','Non'])->nullable(); 
            $table->enum('echus',['Oui','Non'])->nullable();
            $table->string('repriseD')->nullable();
            $table->string('reclamationD')->nullable();
            $table->string('failliteD')->nullable();
            $table->string('echusD')->nullable();
            $table->unsignedbigInteger('main_id')->index();
            $table->timestamps();
            $table->foreign('main_id')->references('id')->on('mains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
};
