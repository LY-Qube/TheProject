<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessKeysTable extends Migration
{
    public function up()
    {
        Schema::create('access_keys', function (Blueprint $table) {
            $table->id();

            $table->string('email')->unique();
            $table->string('job_position');
            $table->string('access_key')->unique();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('access_keys');
    }
}
