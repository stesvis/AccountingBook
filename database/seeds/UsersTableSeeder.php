<?php

use App\User;
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
        $user = new User();
        $user->name = 'admin';
        $user->password = Hash::make('Abc123!');
        $user->email = 'admin@levitica.ca';
        $user->save();

        $user = new User();
        $user->name = 'cristian';
        $user->password = Hash::make('Abc123!');
        $user->email = 'cristian@levitica.ca';
        $user->save();
    }
}
