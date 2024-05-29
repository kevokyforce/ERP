<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ClientDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        $client = new User();
        $clientsDetail = new ClientDetail();
        $client->first_name = $faker->firstName();
        $client->last_name = $faker->lastName();
        $client->role_id = 3;
        $client->email = $faker->email();
        $client->password = Hash::make(env('DEFAULT_PASSWORD'));
        $client->save();
        
        $clientsDetail->user_id = $client->id;
        $clientsDetail->phone_number = $faker->phoneNumber();
        $clientsDetail->save();
    }
}
