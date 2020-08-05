<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Martin Roy',
            'email' => 'reachme@martinroy.com',
            'password' => bcrypt('password'),

        ]);
    }
}
