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
        Schema::create('retraits', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('solde_id')->index();
       
            $table->string('montant');
            $table->string('name_retirant');
            $table->string('prename_retirant');
            $table->string('numpiece');
            $table->text('motif');
            $table->string('reference');
            $table->string('tel_retirant');
            $table->string('add_retirant');
            $table->unsignedbigInteger('piece_id');
            $table->bigInteger('user_id');
            $table->timestamps();
        

            $table->foreign('solde_id')->references('id')->on('soldes');
            $table->foreign('piece_id')->references('id')->on('pieces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retraits');
    }
};
