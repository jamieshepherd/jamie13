<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function($table)
        {
            $table->increments('id');
            $table->string('title', 128);
            $table->string('slug', 128);
            $table->string('description', 720);
            $table->string('url', 128)->nullable();
            $table->boolean('available');
            $table->string('img1', 128);
            $table->string('img2', 128)->nullable();
            $table->string('tags', 256);
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
		Schema::drop('projects');
	}

}