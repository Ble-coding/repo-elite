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
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('renseigne_id')->index();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('resp')->nullable();
            $table->string('depuis')->nullable();
            $table->string('nbr_emp')->nullable();  
            $table->string('journal')->nullable();
            $table->string('datefond')->nullable();
            $table->string('tel_com')->nullable();
            $table->string('sect')->nullable();
            $table->string('datebil')->nullable();
            $table->string('daterev')->nullable();
            $table->unsignedbigInteger('user_id')->index()->nullable();
            $table->unsignedbigInteger('juridique_id')->index()->nullable();
            $table->unsignedbigInteger('service_id')->index()->nullable();
            $table->unsignedbigInteger('entreprise_id')->index()->nullable();
            $table->unsignedbigInteger('society_id')->index()->nullable();
            $table->timestamps();
            $table->foreign('renseigne_id')->references('id')->on('renseignes');
            $table->foreign('juridique_id')->references('id')->on('juridiques');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('society_id')->references('id')->on('societies');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mains');
    }
};
