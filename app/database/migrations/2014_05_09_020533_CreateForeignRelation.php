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
        Schema::table('tags', function(Blueprint $table) {
            $table->foreign('paste_id')->references('id')->on('pastes')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
        /*
        Schema::table('roles', function(Blueprint $table) {
            $table->foreign('uid')->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
        */
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
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('roles_uid_foreign');
        });

    }

}
