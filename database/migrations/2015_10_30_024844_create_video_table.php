<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('video',function(Blueprint $table) {
            $table->increments('vid');
            $table->string('vTypeId');
            $table->string('vTypeName');
            $table->string('vName');
            $table->text('introduce');
            $table->string('vLogo');
            $table->string('keywords');
            $table->string('vResources');
            $table->string('copyright');
            $table->integer('uid');
            $table->string('uName');
            $table->time('publishedTime');
            $table->integer('vnum');
            $table->integer('dnum');
            $table->integer('default');
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
