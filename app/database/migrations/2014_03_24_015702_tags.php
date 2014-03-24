<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tags extends Migration {

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
            $table->foreign('paste_id')->references('id')->on('pastes')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->string('tag');
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
        Schema::table('tags', function(Blueprint $table) {
            $table->dropForeign('tags_paste_id_foreign');
        });

        Schema::dropIfExists('tags');
    }
    

}
