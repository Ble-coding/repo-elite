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
        Schema::create('patrimoines', function (Blueprint $table) {
            $table->id();
            $table->string('type_pat');
            $table->string('description');
            $table->string('valeur');
            $table->string('type_pat1');
            $table->string('description1');
            $table->string('valeur1');
            $table->string('type_pat2');
            $table->string('description2');
            $table->string('valeur2');
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
        Schema::dropIfExists('patrimoines');
    }
};
