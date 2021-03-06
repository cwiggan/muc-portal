<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('videos', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('name');
                $table->string('title');
                $table->text('desc');
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
	    Schema::drop('videos');
           
	}

}
