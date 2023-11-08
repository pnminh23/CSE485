<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Region;
use App\Models\Flower;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("regions")->delete();
        $faker = Faker::create();
        $flower_id = Flower::all()->pluck("id")->toArray();
        for ($i = 0; $i < 10; $i++) {
            Region::create([
                "region_name"=> $faker->name,
                "flower_id" => $faker->randomElement($flower_id),

            ]);
        }
    }
}
