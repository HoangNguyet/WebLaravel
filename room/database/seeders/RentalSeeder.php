<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $rooms = Room::pluck('id');
        for($i = 1; $i < 50; $i++){
            //tao ra 1 thoi diem ngau nhien tu 1 tuan trc cho den thoi diem hien tai
            $checkin = $faker->dateTimeBetween('-1 week');
            //thoi gian ngau nhien tu hien tai den 1 tuan sau do, optional tao nhung cho phep null
            $checkout = $faker->optional()->dateTimeBetween('now','+1 week');
            // Tính toán số giờ thuê
            //diff: tính sự khác biệt giữa giời chả và nhận hàng
            $intervel = $checkout ? $checkin->diff($checkout) : null;
            $hours = $intervel ? $intervel->h + ($intervel->days * 24) : null;
            $roomId = $rooms->random();
            $price = Room::where('id', $roomId)->first()->price;
            $totalmoney = $hours * $price;
            Rental::create([
                'customerName' => $faker->name(),
                'identification' => $faker->numerify('#############'),
                //tao ra 1 thoi diem ngau nhien tu 1 tuan trc cho den thoi diem hien tai
                'checkin' => $checkin,
                //thoi gian ngau nhien tu hien tai den 1 tuan sau do, optional tao nhung cho phep null
                'checkout' => $checkout,
                'numberofhour' => $hours,
                'totalmoney' => $totalmoney,
                'roomId' => $roomId
            ]);
        }
    }
}
