<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('teamMember',function(Blueprint $table) {
            $table->increments('mId');
            $table->string('mName');
            $table->string('sex');
            $table->string('mImg');
            $table->integer('age');
            $table->string('class');
            $table->text('committed');
            $table->text('Mintroduce');
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
