<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
            DB::table('reservations')->insert([
                'time' => $faker->time($format = 'H:i:s', $max = 'now'),
                'date' => $faker->dateTime($max = 'now'),
                'mail' => $faker->email,
            ]);
        }
    }
}
