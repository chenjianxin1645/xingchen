<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums',function(Blueprint $table) {
            $table->increments('fid');
            $table->integer('fup');
            $table->string('type');
            $table->string('icon');
            $table->string('name');
            $table->text('description');
            $table->integer('numPosts');
            $table->integer('numThreads');
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
