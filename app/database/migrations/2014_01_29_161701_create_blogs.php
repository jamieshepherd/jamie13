<?php

use Illuminate\Database\Migrations\Migration;

class CreateBlogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('blogs', function($table)
        {
            $table->increments('id');
            $table->string('title', 128);
            $table->string('slug', 128)->unique();
            $table->text('content', 280);
            $table->boolean('available');
            $table->boolean('allow_comments')->default(true);
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
        Schema::drop('blogs');
    }

}