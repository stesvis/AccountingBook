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
        $customer->contact = 'David Rogers';
        $customer->phone = '555-123-4567';
        $customer->email = 'd.rogers@levitica.ca';
//        $customer->address = '';
        $customer->city = 'Vauxhall';
        $customer->state = 'AB';
//        $customer->zipcode = '';
        $customer->country = 'Canada';
        $customer->save();
    }
}
