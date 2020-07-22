<?php

use Illuminate\Database\Seeder;

class UserMenuTableSeeder extends Seeder {

    public function run()
    {
		for($i = 1; $i <= 10; ++$i)
		{
			$numbers = range(1, 10);
			shuffle($numbers);
			$n = rand(3, 6);
			for($j = 1; $j < $n; ++$j)
			{
				DB::table('user_menu')->insert(array(
					'id_menu' => $i,
					'id_user' => $i
				));
			}
		}
	}
}