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
        Schema::create('confires', function (Blueprint $table) {
            $table->id();
            $table->string('motif')->nullable();
            $table->unsignedbigInteger('society_id')->index();
            $table->timestamps();
            $table->foreign('society_id')->references('id')->on('societies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confires');
    }
};
