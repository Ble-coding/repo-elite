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
        Schema::create('bancarisations', function (Blueprint $table) {
            $table->id();
            $table->string('montantBank');
            $table->string('banque');
            $table->string('date_compte');
            $table->string('balance');
            $table->string('type');

            $table->string('montantBank1');
            $table->string('banque1');
            $table->string('date_compte1');
            $table->string('balance1');
            $table->string('type1');

            $table->string('montantBank2');
            $table->string('banque2');
            $table->string('date_compte2');
            $table->string('balance2');
            $table->string('type2');

            $table->string('montantBank3');
            $table->string('banque3');
            $table->string('date_compte3');
            $table->string('balance3');
            $table->string('type3');


            $table->string('montantBank4');
            $table->string('banque4');
            $table->string('date_compte4');
            $table->string('balance4');
            $table->string('type4');

            $table->string('montantBank5');
            $table->string('banque5');
            $table->string('date_compte5'); 
            $table->string('balance5');
            $table->string('type5');


            $table->string('montantBank6');
            $table->string('banque6');
            $table->string('date_compte6');
            $table->string('balance6');
            $table->string('type6');


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
        Schema::dropIfExists('bancarisations');
    }
};
