<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 1; $i < 50; $i ++){
            Customer::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'phone' => $faker->numerify('##########')
            ]);
        }

    }
}
