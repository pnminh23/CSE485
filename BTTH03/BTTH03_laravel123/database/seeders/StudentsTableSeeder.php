<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Student;
use App\Models\MyClass;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("students")->delete();
        $faker = Faker::create('vi_VN');
        $myClass_id = MyClass::all()->pluck("id")->toArray();
        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'myclass_id' => $faker->randomElement($myClass_id),  
            ]);
        }
    }
}
