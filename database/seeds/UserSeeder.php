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
            'name' => 'User1',
            'email' => 'user@email.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
