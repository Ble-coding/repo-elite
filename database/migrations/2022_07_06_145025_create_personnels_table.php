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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('name_ref');
            $table->string('prename_ref');
            $table->string('adressRef');
            $table->string('telRef');
            $table->string('name_ref1');
            $table->string('prename_ref1');
            $table->string('adressRef1');
            $table->string('telRef1');
            // $table->string('name_ref2');
            // $table->string('prename_ref2');
            // $table->string('adressRef2');
            // $table->string('telRef2');

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
        Schema::dropIfExists('personnels');
    }
};
