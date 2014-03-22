<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GenerateTagTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function($table) {
            $table->increments('id');
            $table->unsignedInteger('paste_id');
            $table->foreign('paste_id')
                  ->references('id')
                  ->on('pastes')
                  ->onDelete('cascade');
            $table->string('tag');
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
    }

}
