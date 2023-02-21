<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newTrain = new Train();
            $newTrain->Azienda = $faker->word();
            $newTrain->Stazione_di_partenza = $faker->sentence(2);
            $newTrain->Stazione_di_arrivo = $faker->sentence(2);
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->numerify('########');
            $newTrain->Numero_Carrozze = $faker->randomNumber(2, true);
            $newTrain->In_orario = $faker->numberBetween(0, 1);
            $newTrain->Cancellato = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
