<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Artwork;
use Faker\Provider\Image as ImageProvider;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("artworks")->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $image = $faker->image(public_path('images'), 400, 300, 'artist_women', false);
            Artwork::create([
                "artist_name"=> $faker->name(10),
                "description"=> $faker->sentence(5),
                "art_type" => $faker->randomElement(["Hội Hoạ","Âm nhạc","Văn học"]),
                "media_link" => $faker->url,
                "cover_image" => $faker->imageUrl(640,480,'nature',true,'erro'),
            ]);
        }

    }
}
