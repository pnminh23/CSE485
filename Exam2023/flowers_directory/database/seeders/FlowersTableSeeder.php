<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Flower;

class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("flowers")->delete();
        $faker = Faker::create();
        
        
        for ($i = 0; $i < 20; $i++) {
            $image = $faker->image(public_path("images"),400,300,'flower',false);
            Flower::create([
                'name'=> $faker->name,
                'description'=> $faker->text,
                'image_url' => 'images/'.basename($image),
            ]);
        }


    }
}
