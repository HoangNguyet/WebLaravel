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
        for($i = 1; $i < 50; $i++) {
            Room::create([
                'roomNumber' => $faker->unique()->numberBetween(1, 100),
                'roomType' => $faker->randomElement(['standard', 'deluxe', 'suite']),
                'availability' => $faker->randomElement(['available', 'occupied', 'under mainternance'])
            ]);
        }
    }
}
