<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('job_position');
            $table->string('avatar')->nullable();

            $table->string('email')->unique();
            $table->string('password');

            $table->boolean('is_admin')->default(false);

            $table->unsignedBigInteger('creator_id')->index()->nullable();
            $table->foreign('creator_id')->references('id')->on('users');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
