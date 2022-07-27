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
        Schema::create('needs', function (Blueprint $table) {
            $table->id();
            $table->string('montant')->nullable();
            $table->string('objet')->nullable();
            $table->string('auto')->nullable();
            $table->string('elite')->nullable();
            $table->string('cout');
            $table->unsignedbigInteger('main_id')->index();
            $table->unsignedbigInteger('pret_id')->index();
            $table->timestamps();
            $table->foreign('main_id')->references('id')->on('mains');
            $table->foreign('pret_id')->references('id')->on('prets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('needs');
    }
};
