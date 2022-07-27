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
        Schema::create('actifs', function (Blueprint $table) {
            $table->id();
            $table->string('sgbk')->nullable();
            $table->string('institutions')->nullable();
            $table->string('assurance')->nullable();
            $table->string('compte')->nullable();
            $table->string('negociable')->nullable();
            $table->string('sommes')->nullable();
            $table->string('sommes1')->nullable();
            $table->string('auto')->nullable();
            $table->string('immo')->nullable();
            $table->string('int')->nullable();
            $table->string('element')->nullable();
            $table->string('element1')->nullable();
            $table->string('element2')->nullable();
            $table->string('actif_tot')->nullable();
            $table->unsignedbigInteger('main_id')->index()->nullable();
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
        Schema::dropIfExists('actifs');
    }
};
