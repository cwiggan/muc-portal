<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPdfPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function($table)
                {
                    $table->string('pdf_file')->nullable();
                    $table->string('pdf_pages')->nullable();
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($table)
                {
                    $table->dropColumn('pdf_file');
                    $table->dropColumn('pdf_pages');
                });
	}

}
