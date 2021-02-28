<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::truncate();
        
        $faker = \Faker\Factory::create();

        \App\User::create([
            'name' => 'John Doe',
            'email' => 'John.doe@graphql.com',
            'password' => bcrypt('secret')
        ]);

        foreach(range(1, 10) as $i) {
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => str_random()
            ]);
        }
    }
}
