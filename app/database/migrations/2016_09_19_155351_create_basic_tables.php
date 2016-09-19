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
			$table->string('email')->unique();
			$table->string('name');
			$table->timestamps();
	  });

		Schema::create('posts', function($table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name', 150);
			$table->timestamps();
		});

		Schema::create('comments', function($table)
		{
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->text('text');
			$table->timestamps();
		});

		Schema::table('posts', function($table)
		{
			$table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('posts');
		Schema::drop('comments');
		Schema::drop('users');
	}

}
