<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 1; $i <= 50; $i++){
            Room::create([
                'status' => $faker->boolean(),
                'price' => $faker->randomFloat(2, 10, 1000)
            ]);
        }
    }
}
