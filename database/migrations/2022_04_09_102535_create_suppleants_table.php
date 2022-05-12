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
        Schema::create('suppleants', function (Blueprint $table) {
            $table->id();
            $table->string('code_parrain');
            $table->string('name');
            $table->string('prename');
 
            $table->string('tel');
            $table->string('email');
           

            $table->string('prof');
         
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppleants');
    }
};
