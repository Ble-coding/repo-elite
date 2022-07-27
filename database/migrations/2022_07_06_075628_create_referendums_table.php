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
        Schema::create('referendums', function (Blueprint $table) {
            $table->id();
            $table->string('nameref');
            $table->string('prenameref');
            $table->string('adress_ref');
            $table->string('tel_ref');

            $table->string('name1');
            $table->string('prename1');
            $table->string('adress_ref1');
            $table->string('tel_ref1');

            $table->string('nameref2');
            $table->string('prenameref2');
            $table->string('adress_ref2');
            $table->string('tel_ref2');

            $table->string('name3');
            $table->string('prename3');
            $table->string('adress_ref3');
            $table->string('tel_ref3');

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
        Schema::dropIfExists('referendums');
    }
};
