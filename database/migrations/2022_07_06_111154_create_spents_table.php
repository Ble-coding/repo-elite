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
        Schema::create('spents', function (Blueprint $table) {
            $table->id();
            $table->string('vers_hyp')->nullable();
            $table->string('impt_fon')->nullable();
            $table->string('impt_rev')->nullable();
            $table->string('prime')->nullable();
            $table->string('carte_credit')->nullable();
            $table->string('rembourse')->nullable();
            $table->string('pension')->nullable();
            $table->string('autre_dep')->nullable();
            $table->string('autre_dep1')->nullable(); 
            $table->string('autre_dep2')->nullable();
            $table->string('autre_dep3')->nullable();
            $table->string('tot_dep')->nullable();
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
        Schema::dropIfExists('spents');
    }
};
