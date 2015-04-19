<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::table('user_video', function($table)
            {
                
                $table->unsignedInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->unsignedInteger('video_id');
                $table->foreign('video_id')->references('id')->on('videos');
                //$table->boolean('watched');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
             Schema::drop('user_video');

		//
	}

}
