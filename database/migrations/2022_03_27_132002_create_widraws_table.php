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
        Schema::create('widraws', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('sod_id')->index();
            $table->text('motif');
            $table->string('montant');
            $table->string('name_retirant');
            $table->string('prename_retirant');
            $table->string('add_retirant');
            $table->string('numpiece');
            $table->string('reference');
            $table->string('tel_retirant');
            $table->unsignedbigInteger('piece_id');
            $table->bigInteger('user_id');
            $table->timestamps();
        

            $table->foreign('piece_id')->references('id')->on('pieces');
            $table->foreign('sod_id')->references('id')->on('sods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('widraws');
    }
};
