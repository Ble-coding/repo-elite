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
        Schema::create('conjoints', function (Blueprint $table) {
            $table->id();
            $table->string('nameC')->nullable();
            $table->string('prenameC')->nullable();
            $table->enum('sexeC',['F','M'])->nullable();
            $table->string('communeC')->nullable();
            $table->string('datenaissC')->nullable();
            $table->unsignedbigInteger('piece_idC')->index()->nullable();
            $table->unsignedbigInteger('general_id')->index();
            $table->string('name_naissanceC')->nullable();
            $table->string('nbr_dependantC')->nullable();
            $table->string('commune_residenceC')->nullable();
            $table->timestamps();
            $table->foreign('piece_idC')->references('id')->on('pieces');
            $table->foreign('general_id')->references('id')->on('generals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conjoints');
    }
};
