<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Pixel',
            'email' => 'dev@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Superman',
            'email' => 'superman@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
