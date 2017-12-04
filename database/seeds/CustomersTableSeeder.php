<?php

use App\Client;
use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = Client::where('name', 'Levitica')->first();

        $customer = new Customer();
        $customer->client_id = $client->id;
        $customer->name = 'South Country Co-op';
        $customer->contact = 'John Doe';
        $customer->phone = '555-123-4567';
        $customer->email = 'j.doe@levitica.ca';
//        $customer->address = '';
        $customer->city = 'Vauxhall';
        $customer->state = 'AB';
//        $customer->zipcode = '';
        $customer->country = 'Canada';
        $customer->save();

        $customer = new Customer();
        $customer->client_id = $client->id;
        $customer->name = 'Pask Technologies';
        $customer->contact = 'James Bond';
        $customer->phone = '555-123-4567';
        $customer->email = 'j.bond@levitica.ca';
//        $customer->address = '';
        $customer->city = 'Lethbridge';
        $customer->state = 'AB';
//        $customer->zipcode = '';
        $customer->country = 'Canada';
        $customer->save();

        $customer = new Customer();
        $customer->client_id = $client->id;
        $customer->name = 'Surex Direct';
        $customer->contact = 'Morgan Freeman';
        $customer->phone = '555-123-4567';
        $customer->email = 'm.freeman@levitica.ca';
//        $customer->address = '';
        $customer->city = 'Lethbridge';
        $customer->state = 'AB';
//        $customer->zipcode = '';
        $customer->country = 'Canada';
        $customer->save();
    }
}
