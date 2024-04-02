<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Room;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $customers = Customer::pluck('id')->toArray(); //lay danh sach cac id trong bang customers
        $rooms = Room::pluck('id')->toArray(); //lay danh sach cac id trong bang customers
        for($i = 1; $i < 50; $i ++){
            Booking::create([
                'customerId' => $faker->randomElement($customers),
                'roomId' => $faker->randomElement($rooms),
                'checkindate' =>$faker->dateTimeBetween('-1 week'),
                'checkoutdate' => $faker->dateTimeBetween('now', '+1 week')
            ]);
        }
    }
}
