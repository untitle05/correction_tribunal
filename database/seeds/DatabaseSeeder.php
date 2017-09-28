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
        // $this->call(UsersTableSeeder::class);

      /*  DB::table('users')->delete();

        for($i = 0; $i < 10; ++$i)
        {
            DB::table('users')->insert([
                'name' => 'Nom' . $i,
                'email' => 'email' . $i . '@blop.fr',
                'avatar' => 'profile.png',
                'admin' => rand(0, 1),
                'password' => bcrypt('password' . $i)
            ]);
        }*/
    }
}
