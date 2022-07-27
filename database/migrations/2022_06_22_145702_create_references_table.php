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
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('nameref');
            $table->string('prenameref');
            $table->string('name1');
            $table->string('prename1');
            $table->string('adress_ref');
            $table->string('tel_ref');
            $table->string('adress_ref1');
            $table->string('tel_ref1');
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
        Schema::dropIfExists('references');
    }
};
