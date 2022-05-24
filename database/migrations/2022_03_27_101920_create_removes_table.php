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
        Schema::create('removes', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('sode_id')->index();
            $table->string('montant');
            $table->text('motif');
            $table->string('name_retirant');
            $table->string('prename_retirant');
            $table->string('numpiece');
            $table->string('reference');
            $table->string('tel_retirant');
            $table->string('add_retirant');
            $table->unsignedbigInteger('piece_id');
            $table->bigInteger('user_id');
            $table->timestamps();
        

            

            $table->foreign('sode_id')->references('id')->on('sodes');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('removes');
    }
};
