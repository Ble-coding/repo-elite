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
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->string('rev_mens')->nullable();
            $table->string('comm')->nullable(); 
            $table->string('div_int')->nullable();
            $table->string('rev_loc')->nullable();
            $table->string('autre_rev1')->nullable(); 
            $table->string('autre_rev2')->nullable();
            $table->string('tot_part')->nullable();
            $table->string('rev_mens_conj')->nullable();
            $table->string('autre_rev_conj')->nullable();
            $table->string('autre_rev3')->nullable();
            $table->string('autre_rev4')->nullable();
            $table->string('tot_rev')->nullable();

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
        Schema::dropIfExists('recettes');
    }
};
