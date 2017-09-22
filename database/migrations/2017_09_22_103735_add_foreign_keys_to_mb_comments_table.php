<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMbCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mb_comments', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_mb_comments_mb_posts1')->references('id')->on('mb_posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_mb_comments_mb_users1')->references('id')->on('mb_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mb_comments', function(Blueprint $table)
		{
			$table->dropForeign('fk_mb_comments_mb_posts1');
			$table->dropForeign('fk_mb_comments_mb_users1');
		});
	}

}
