<?php

use App\Client;
use App\User;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_1 = User::where('name', 'admin')->first();
        $user_2 = User::where('name', 'cristian')->first();


        $client = new Client();
        $client->name = 'Levitica';
        $client->phone = '403-795-8540';
        $client->email = 'contact@levitica.ca';
        $client->address = 'Po Box 1160';
        $client->city = 'Magrath';
        $client->state = 'AB';
        $client->zipcode = 'T0K1J0';
        $client->country = 'Canada';
        $client->save();

        $client->users()->attach($user_1);
        $client->users()->attach($user_2);
    }
}
