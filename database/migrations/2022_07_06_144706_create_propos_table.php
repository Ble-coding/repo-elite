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
        Schema::create('propos', function (Blueprint $table) {
            $table->id();
            $table->string('garanties');
            $table->string('amount');
            $table->enum('place',['Oui','Non'])->nullable();
            $table->string('dateE');


            $table->string('garanties1');
            $table->string('amount1');
            $table->enum('place1',['Oui','Non'])->nullable();
            $table->string('dateE1');

            $table->string('garanties2');
            $table->string('amount2');
            $table->enum('place2',['Oui','Non'])->nullable();
            $table->string('dateE2');

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
        Schema::dropIfExists('propos');
    }
};
