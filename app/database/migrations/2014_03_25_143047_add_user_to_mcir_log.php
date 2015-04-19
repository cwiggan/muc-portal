<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddUserToMcirLog extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mcir_logs', function(Blueprint $table)
		{
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
		});
		Schema::table('videos', function(Blueprint $table)
		{
			$table->string('image');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mcir_logs', function(Blueprint $table)
		{
			$table->dropColumn('user_id');
		});
		Schema::table('videos', function(Blueprint $table)
		{
			$table->dropColumn('image');
		});
	}

}
