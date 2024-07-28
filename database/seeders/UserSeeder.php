<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i =1; $i<=100; $i++){
            $data =new User();
            $data->name =$faker->name;
            $data->address =$faker->address;
            $data->email =$faker->email;
            $data->password =$faker->password;
            $data->save();
        }
        }
}
