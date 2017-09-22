<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMbUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mb_users', function(Blueprint $table)
		{
			$table->foreign('resource_id', 'fk_ma_users_ma_files')->references('id')->on('mb_resources')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mb_users', function(Blueprint $table)
		{
			$table->dropForeign('fk_ma_users_ma_files');
		});
	}

}
