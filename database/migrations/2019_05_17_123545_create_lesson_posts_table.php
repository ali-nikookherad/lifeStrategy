<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonPostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lesson_posts' , function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('userID');
			$table->string('img');
			$table->string('title');
			$table->integer('category');
			$table->string('source');
			$table->timestamps();
			$table->string('status' , 15);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('lesson_posts');
	}
}