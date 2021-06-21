<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{

    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');

            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->date('birth')->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
