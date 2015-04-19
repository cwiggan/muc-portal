<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcirLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('mcir_logs', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('first_name');
                $table->string('last_name');
                $table->text('address');
                $table->string('phone');
                $table->date('dob');
                $table->date('date');
                $table->string('vaccine');
                $table->string('site');
                $table->string('mfg_id');
                $table->date('exp_date');
                $table->string('init');
                $table->boolean('put_in_mcir');
                
                
            });		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('mcir_logs');
	}

}
