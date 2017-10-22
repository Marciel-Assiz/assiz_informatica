<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'		=> 'Marciel E Assiz',
        	'email'		=> 'marciel.emersom@gmail.com',
        	'password'	=> bcrypt('@macaca1')
        ]);
    }
}
