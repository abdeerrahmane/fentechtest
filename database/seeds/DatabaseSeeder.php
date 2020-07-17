<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Menu::class, 40)->create();
        factory(App\Contenu::class, 40)->create();  
        factory(App\Type::class, 80)->create(); 
        factory(App\Photo::class, 80)->create();
        $this->call(menuTableSeeder::class);
        $this->call(UserMenuTableSeeder::class);
        $this->call(UserTableSeeder::class);

        for ($i = 1; $i < 41; $i++) {
            $number = rand(2, 8);
            for ($j = 1; $j <= $number; $j++) {
                DB::table('contenus')->insert([
                    'titre'=> 'voici titre ' . $j ,
                    'prix'=> rand(1, 400),
                    'menu_id' => rand(1, 25),
                    'type_id' => $j,
                    'photo_id' => $j-1,
                ]);
            }
        }
     
    }
}
