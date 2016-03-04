<?php

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
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password', 60);
            $table->string('nikename');
            $table->string('realname');
            $table->string('image');
            $table->text('introduction');
            $table->string('sex');
            $table->integer('phone');
            $table->integer('qq');
            $table->time('registerTime');
            $table->time('lostLoginTime');
            $table->integer('numOfLogin');



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
        Schema::drop('users');
    }
}
