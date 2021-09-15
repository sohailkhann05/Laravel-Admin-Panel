<?php

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
        \App\User::create([
	        'name' => 'Admin',
	        'username' => 'sohailkhan05',
	        'email' => 'admin@gmail.com',
	        'password' => bcrypt('sohail24241'),
	        'password_hint' => 'sohail24241'
        ]);
    }
}
