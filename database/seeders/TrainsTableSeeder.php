<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0 ; $i< 5; $i++){

            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departur_station = $faker->word();
            $newTrain->departure_time = "$faker->date $faker->time";
            $newTrain->arrival_time = "$faker->date $faker->time";
            $newTrain->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->train_carraiges_number = $faker->numberBetween(0,20);
            $newTrain->on_time = $faker->numberBetween(0,1);
            $newTrain->train_cancelled = $faker->numberBetween(0,1);
            $newTrain->save();

        }
    }
}
