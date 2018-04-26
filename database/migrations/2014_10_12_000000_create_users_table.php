<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('adress');
            $table->string('postal_code');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('website')->nullable();
            $table->string('profile_picture')->default('avatar.png');
            $table->boolean('set_avatar')->default(false);
            $table->string('cv')->default('default.pdf');
            $table->string('ilanguage')->nullable();
            $table->string('language')->nullable();
            $table->string('tool')->nullable();
            $table->string('know_how')->nullable();
            $table->string('expertise')->nullable();
            $table->text('bio')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
