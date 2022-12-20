<?php

namespace Database\Seeders;

use App\Models\House;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $house = new House();
            $house->reference_no = $faker->bothify('??-#########');
            $house->address = $faker->streetAddress();
            $house->city = $faker->city();
            $house->post_code = $faker->postcode();
            $house->state = $faker->state();
            $house->price = $faker->randomFloat(2, 2000, 10000000);
            $house->square_meters = $faker->numberBetween(100, 1000);
            $house->rooms = $faker->numberBetween(2, 10);
            $house->bathrooms = $faker->numberBetween(1, 4);
            $house->is_available = $faker->randomElement([true, false]);
            $house->type = $faker->randomElement(['Villa', 'Palazzo', 'Terreno', 'Appartamento', 'Attico', 'Cottage']);
            $house->energy_rating = $faker->randomElement(['A+++', 'A++', 'A+', 'B', 'C', 'D', 'E', 'F', 'G']);
            $house->description = $faker->text();
            $house->save();
        }
    }
}
