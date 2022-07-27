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
        Schema::create('protections', function (Blueprint $table) {
            $table->id();
            $table->string('assu');
            $table->string('montant_pro');
            $table->string('typing')->nullable();

            $table->string('assu1');
            $table->string('montant_pro1');
            $table->string('typing1')->nullable();

            $table->string('assu2');
            $table->string('montant_pro2');
            $table->string('typing2')->nullable();

            $table->string('assu3');
            $table->string('montant_pro3');
            $table->string('typing3')->nullable();

            $table->string('assu4');
            $table->string('montant_pro4');
            $table->string('typing4')->nullable();


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
        Schema::dropIfExists('protections');
    }
};
