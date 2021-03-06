<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
	  {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			$table->timestamps();
	  });

		Schema::create('posts', function($table)
		{
			$table->increments('id');
			$table->string('name', 150);
			$table->text('content');
			$table->timestamps();
		});

		Schema::create('comments', function($table)
		{
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->text('text');
			$table->timestamps();
		});

		Schema::table('comments', function($table)
		{
			$table->foreign('post_id')->references('id')->on('posts');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
		Schema::drop('posts');
		Schema::drop('users');
	}

}
