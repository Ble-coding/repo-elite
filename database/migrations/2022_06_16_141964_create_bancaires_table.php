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
        Schema::create('bancaires', function (Blueprint $table) {
            $table->id();
            $table->string('montantBank');
            $table->string('banque');
            $table->string('num_compte');
            $table->string('balance');
            $table->string('type');

            $table->string('montantBank1');
            $table->string('banque1');
            $table->string('num_compte1');
            $table->string('balance1');
            $table->string('type1');

            $table->string('montantBank2');
            $table->string('banque2');
            $table->string('num_compte2');
            $table->string('balance2');
            $table->string('type2');

            $table->string('montantBank3');
            $table->string('banque3');
            $table->string('num_compte3');
            $table->string('balance3');
            $table->string('type3');


            $table->string('montantBank4');
            $table->string('banque4');
            $table->string('num_compte4');
            $table->string('balance4');
            $table->string('type4');

            $table->unsignedbigInteger('general_id')->index();
            $table->timestamps();
            $table->foreign('general_id')->references('id')->on('generals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bancaires');
    }
};
