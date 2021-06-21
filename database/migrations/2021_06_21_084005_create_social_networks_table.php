<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialNetworksTable extends Migration
{

    public function up()
    {
        Schema::create('social_networks', function (Blueprint $table) {
            $table->id();

            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('github')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_networks');
    }
}
