<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_menu', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
                  $table->integer('id_menu')->unsigned();
                  $table->foreign('id_menu')->references('id')->on('menus')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
                  $table->foreign('id_user')->references('id')->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_menu', function(Blueprint $table) {
		  	$table->dropForeign('user_menu_id_user_foreign');
		  	$table->dropForeign('user_menu_id_menu_foreign');
		});

		Schema::drop('user_menu');
    }
}
