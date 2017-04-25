<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('posts', function(Blueprint $table){
			// id  incrementing primary key
			$table->increments('id');
			// title   a short desciption of the post's content
			$table->string('title');
			// url a link to external content
			$table->string('url');
			// content several paragraphs of text
			$table->text('content');
			// created_by  a foreign key that references the user table
			$table->integer('created_by')->unsigned();
			$table->foreign('created_by')->references('id')->on('users');
			// created_at  a datetime
			// updated_at  a datetime
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
		Schema::drop('posts');
	}
}
