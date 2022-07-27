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
        Schema::create('emprunteurs', function (Blueprint $table) {
            $table->id();
            $table->string('prof_emp');
            $table->string('name_emp');
            $table->string('addresse');
            $table->string('date_deb');
            $table->string('position');
            $table->string('emp_pre');
            $table->string('date_fin');
            $table->string('autre_act');
            $table->string('date_inst');
            $table->string('proprio');
            $table->string('patente');
            $table->string('nbr_pers');
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
        Schema::dropIfExists('emprunteurs');
    }
};
