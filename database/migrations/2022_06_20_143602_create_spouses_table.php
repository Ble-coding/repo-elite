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
        Schema::create('spouses', function (Blueprint $table) {
            $table->id();
            $table->string('prof_empS')->nullable();
            $table->string('name_empS')->nullable();
            $table->string('addresseS')->nullable();
            $table->string('date_debS')->nullable();
            $table->string('positionS')->nullable();
            $table->string('emp_preS')->nullable();
            $table->string('date_finS')->nullable();
            $table->string('autre_actS')->nullable();
            $table->string('date_instS')->nullable();
            $table->string('proprioS')->nullable();
            $table->string('patenteS')->nullable();
            $table->string('nbr_persS')->nullable();
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
        Schema::dropIfExists('spouses');
    }
};
