<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder {

   

    public function run()
	{
        
		DB::table('users')->delete();

		for($i = 0; $i < 10; ++$i)
		{
			DB::table('users')->insert([
				'name' => 'Nom' . $i,
                'email' => 'email' . $i . '@blop.fr',
                'prenom'=>'prenom'.$i,
                'numero_tel' =>' num tel '.$i,
				'password' => bcrypt('password' . $i)

                
			]);
		}
	}
}