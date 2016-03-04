<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post',function(Blueprint $table) {
            $table->increments('pid');
            $table->integer('fid');
            $table->integer('tid');
            $table->string('author');
            $table->string('authorId');
            $table->string('subject');
            $table->text('message');
            $table->string('position');
            $table->integer('level');
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
        //
    }
}
