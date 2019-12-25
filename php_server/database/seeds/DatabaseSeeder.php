<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        \App\User::create([
            'name' => 'manish',
            'email' => 'manishsahani@gmail.com',
            'password' => bcrypt('manish'),
        ]);
    }
}