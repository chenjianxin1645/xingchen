<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamIntroductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('teamIntroduction',function(Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->text('iContent');
            $table->timestamp('updateTime');
            $table->string('updateMember');
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
        Schema::drop('teamintroduction');
    }
}
