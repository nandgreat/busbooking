<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default = [
            [
                'bus_id' => 1,
                'from' => 'Abuja',
                'to' => 'Lagos',
                'departure_date' => '2023-09-28',
                'departure_time' => '9:00am',
                'price' => '11000',
                'seats_available' => '18',
                'seats_taken' => '0',
                'created_at' => now()
            ],
            [
                'bus_id' => 2,
                'from' => 'Abuja',
                'to' => 'Jos',
                'departure_date' => '2023-09-28',
                'departure_time' => '9:00am',
                'price' => '3000',
                'seats_available' => '18',
                'seats_taken' => '0',
                'created_at' => now()
            ],
            [
                'bus_id' => 1,
                'from' => 'Abuja',
                'to' => 'Lagos',
                'departure_date' => '2023-09-29',
                'departure_time' => '9:00am',
                'price' => '7500',
                'seats_available' => '18',
                'seats_taken' => '0',
                'created_at' => now()
            ],
            [
                'bus_id' => 2,
                'from' => 'Lagos',
                'to' => 'Abuja',
                'departure_date' => '2023-09-30',
                'departure_time' => '9:00am',
                'price' => '6500',
                'seats_available' => '18',
                'seats_taken' => '0',
                'created_at' => now()
            ],
            [
                'bus_id' => 2,
                'from' => 'Abuja',
                'to' => 'Jos',
                'departure_date' => '2023-10-01',
                'departure_time' => '9:00am',
                'price' => '4500',
                'seats_available' => '18',
                'seats_taken' => '0',
                'created_at' => now()
            ],
            [
                'bus_id' => 2,
                'from' => 'Abuja',
                'to' => 'Jos',
                'departure_date' => '2023-10-01',
                'departure_time' => '9:00am',
                'price' => '5500',
                'seats_available' => '18',
                'seats_taken' => '0',
                'created_at' => now()
            ],
            [
                'bus_id' => 2,
                'from' => 'Abuja',
                'to' => 'Jos',
                'departure_date' => '2023-10-03',
                'departure_time' => '9:00am',
                'price' => '7500',
                'seats_available' => '18',
                'seats_taken' => '0',
                'created_at' => now()
            ],
        ];

        DB::table('trips')->insert($default);
    }
}
