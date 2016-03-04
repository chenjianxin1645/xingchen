<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('videoType',function(Blueprint $table) {
            $table->increments('vid');
            $table->string('typeName');
            $table->text('typeDescription');
            $table->string('vtDate');

            $table->integer('userId');
            $table->integer('typeLogo');
            $table->integer('sequence');
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
