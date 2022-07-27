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
        Schema::create('mobilieres', function (Blueprint $table) {
            $table->id();
            $table->string('typeM');
            $table->string('descriptionM');
            $table->string('valeurM');
            $table->string('type_patM1');
            $table->string('descriptionM1');
            $table->string('valeurM1');
            $table->string('type_patM2');
            $table->string('descriptionM2');
            $table->string('valeurM2');
            $table->unsignedbigInteger('general_id')->index();
            $table->timestamps();
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
        Schema::dropIfExists('mobilieres');
    }
};
