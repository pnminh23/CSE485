<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\MyClass;

class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("my_classes")->delete();
        $faker = Faker::create('vi_VN');
        for ($i = 0; $i < 10; $i++) {
            MyClass::create([
                'name_class' => $faker->name,
            ]);
        }
        
    }
}
