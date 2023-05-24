<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = config('trains_db');
        for ($i = 0; $i > 20; $i++ ) {
            $trainCompany = $trains['companies'][random_int(0, (count($trains['companies']) - 1))];
            $trainStation = $trains['stations'][random_int(0, (count($trains['stations']) - 1))];
            $rndmInt = random_int(0, 10);
            do {
                $trainStation2 = $trains['stations'][random_int(0, (count($trains['stations']) - 1))];
            } while ($trainStation == $trainStation2);
            $newTrain = new Train;
            $newTrain->company = $trainCompany;
            $newTrain->leaving_station = $trainStation;
            $newTrain->arriving_station = $trainStation;
            $newTrain->leaving_time = $faker->time();
            $newTrain->arriving_time = $faker->time();
            $newTrain->train_code = $faker->md5();
            $newTrain->carriages = $faker->numberBetween(6,20);
            $newTrain->in_time = $trainCompany == 'Trenitalia' ? 'false' : $faker->boolean;
            $newTrain->train_code == $rndmInt < 5 ? $faker->boolean : false;
            $newTrain->date = $faker->date;
        }
    }
}
