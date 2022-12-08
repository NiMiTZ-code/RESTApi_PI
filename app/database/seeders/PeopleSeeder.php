<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\People;
use Faker\Factory;

use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
                'phone_num' => $faker->e164PhoneNumber() ,
                'street' => $faker->streetAddress(),
                'city' => $faker->city(),
                'country' => $faker->country(),
            ]);
        }
    }
}
