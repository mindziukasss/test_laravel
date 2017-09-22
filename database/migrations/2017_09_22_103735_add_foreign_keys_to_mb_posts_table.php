<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMbPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mb_posts', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_ma_posts_ma_users1')->references('id')->on('mb_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('resource_id', 'fk_mb_posts_mb_resources1')->references('id')->on('mb_resources')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mb_posts', function(Blueprint $table)
		{
			$table->dropForeign('fk_ma_posts_ma_users1');
			$table->dropForeign('fk_mb_posts_mb_resources1');
		});
	}

}
