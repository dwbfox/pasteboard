<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GeneratePasteTable extends Migration {

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
			$table->string('token', 60)->unique();
			$table->timestamps();
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
		Schema::dropIfExists('pastes');
	}

}
