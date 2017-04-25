<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function(Blueprint $table){
		// id incrementing primary key
			$table->increments('id');
			$table->integer('votes');
		// user_id a foreign key that referencs the users table
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
		// post_id a foreign key that references the posts table
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts');
		// vote	a numeric representation of whether a user votes a post up or down
		// created_at a datetime
		// updated_at a datetime
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
		Schema::drop('votes');
	}
}
