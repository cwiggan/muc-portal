<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocationToMcirlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mcirlogs', function(Blueprint $table)
		{
			$table->unsignedInteger('location_id');
			$table->foreign('location_id')->references('id')->on('locations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mcirlogs', function(Blueprint $table)
		{
			$table->dropColumn('location_id');
		});		//
	}

}
