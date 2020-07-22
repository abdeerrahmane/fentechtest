<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class menuTableSeeder extends Seeder {

    
	public function run()
	{
		DB::table('menus')->delete();
		
		for($i = 0; $i < 20; ++$i)
		{
			
			DB::table('menus')->insert(array(
					'titre_menu' => 'titre1' . $i,
				));
		}
	}
}