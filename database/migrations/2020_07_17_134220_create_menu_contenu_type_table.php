<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuContenuTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenus', function(Blueprint $table) {
			$table->increments('id');
            $table->timestamps();
            $table->string('titre', 250);
            $table->double('prix');
            $table->integer('photo_id')->unsigned();
            $table->integer('type_id')->unsigned();
        });
        Schema::create('types', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            $table->string('type_menu', 250);
            $table->integer('menu_id')->unsigned();
          
        });
        Schema::create('photos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('attribut_photo', 100);
			$table->string('url_photo');	
        });
        Schema::table('contenus', function(Blueprint $table) {
			
            $table->foreign('photo_id')->references('id')->on('photos')
						->onDelete('restrict')
                        ->onUpdate('restrict');     
            $table->foreign('type_id')->references('id')->on('type_menu')
						->onDelete('restrict')
                        ->onUpdate('restrict');      
        });
        Schema::table('types', function(Blueprint $table) {
            $table->foreign('menu_id')->references('id')->on('menus')
            ->onDelete('restrict')
            ->onUpdate('restrict'); 
                
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
        Schema::table('types', function(Blueprint $table) {
			$table->dropForeign('types_menu_id_foreign');
        });
        Schema::table('contenus', function(Blueprint $table) {
			$table->dropForeign('contenus_photo_id_foreign');
        });
        Schema::table('contenus', function(Blueprint $table) {
			$table->dropForeign('contenus_type_id_foreign');
        });

        Schema::drop('contenus');
		Schema::drop('types');
		Schema::drop('photos');
		
    }
}
