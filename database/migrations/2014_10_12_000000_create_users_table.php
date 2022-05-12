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
    // public function up()
    // {
    //     Schema::create('users', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->string('prename');
    //         // $table->string('datenaiss');
    //         // $table->string('numpiece');
    //         // $table->string('dateexp');
    //         // $table->unsignedbigInteger('piece_id')->index();

          
    //         $table->string('tel');
    //         $table->string('email')->unique();
    //         $table->timestamp('email_verified_at')->nullable();
    //         $table->string('password');
    //         $table->rememberToken();
    //         $table->timestamps();

          
    //         // $table->foreign('piece_id')->references('id')->on('pieces');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
