<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $house_types = [
            'camera_singola',
            'camera_doppia',
            'camera_tripla',
            'camera_quadrupla',
            'camera_quintupla',
        ];

        for($i = 0; $i < 5; $i++){
            // Creo una nuova riga
            $new_package = new Package();
            // Popola le righe
            $new_package->compagnia = $faker->company();   
            $new_package->prezzo = $faker->randomFloat(2, 100, 9999999);
            $new_package->giorni = $faker->randomNumber(4, false);
            $new_package->notti = $faker->randomNumber(4, false);
            $new_package->disponibilità = rand(0,1);
            $new_package->data_partenza = $faker->dateTimeThisYear();
            $new_package->data_ritorno = $faker->dateTimeThisYear('+2 months');
            $new_package->alloggio = $faker->randomElement($house_types);
            $new_package->colazione = rand(0,1);
            $new_package->description = $faker->paragraph(10);

            // Salvo i dati
            $new_package->save();


        }
    }
}
