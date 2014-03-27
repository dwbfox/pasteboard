<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pastes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pastes', function($table)
		{
			$table->increments('id');
			$table->longText('paste');
			$table->tinyInteger('private')->default(0);
			$table->string('token', 60)->unique();
			$table->timestamps();
            $table->unsignedInteger('lang_id');
            $table->string('delete_token', 60)->unique();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('pastes', function(Blueprint $table) {
           $table->dropForeign('pastes_lang_id_foreign');
        });

		Schema::dropIfExists('pastes');
	}

}
