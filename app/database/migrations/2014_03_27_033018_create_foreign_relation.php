<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignRelation extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pastes', function(Blueprint $table) {
            $table->foreign('lang_id')->references('id')->on('languages');
        });  


        //
        Schema::table('tags', function(Blueprint $table) {
            $table->foreign('paste_id')->references('id')->on('pastes')
                  ->onDelete('cascade')->onUpdate('cascade');
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
            $table->deleteForeign('pastes_lang_id_foreign');
        });  


        Schema::table('tags', function(Blueprint $table) {
            $table->dropForeign('tags_paste_id_foreign');
        });

    }

}
