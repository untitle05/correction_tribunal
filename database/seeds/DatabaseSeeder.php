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

        $faker = Faker\Factory::create();


        DB::table('users')->delete();

        for($i = 0; $i < 10; ++$i)
        {
            DB::table('users')->insert([
                'name' => 'Nom' . $i,
                'email' => 'email' . $i . '@gov.cm',
                'avatar' => 'profile.png',
                'admin' => rand(0, 1),
                'password' => bcrypt('password' . $i)
            ]);
        }

        for ($i=0;$i<10;$i++)
        {
            DB::table('membres_tribunal')->insert( [

            'nom'=>str_random(10),
            'telephone'=>mt_rand(666666666,699999999),
            'grade'=> 'Avocat'
            ]);
        }
    }
}
