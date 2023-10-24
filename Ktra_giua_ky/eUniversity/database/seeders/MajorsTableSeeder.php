<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Major;
use Faker\Factory as Faker;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("majors")->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 30; $i++) {
            Major::create([
                "name" => $faker->name,
                "description"=> $faker->sentence(5),
                "duration" => $faker->numberBetween(2,5),
            ]);

        }

    }
}
