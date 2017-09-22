<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMbPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mb_posts', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('user_id', 36)->index('fk_ma_posts_ma_users1_idx');
			$table->string('resource_id', 36)->nullable()->index('fk_mb_posts_mb_resources1_idx');
			$table->string('title');
			$table->text('description');
			$table->string('link')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mb_posts');
	}

}
