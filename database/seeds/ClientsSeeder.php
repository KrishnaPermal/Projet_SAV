<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                "nom" => "RAZOR",
                "prenom" => "Blade",
                "tel" => "0692158546",
                "email" => "razor.blade@gmail.com",
                
            ],

            [
                "nom" => "O'NEll",
                "prenom" => "Keyron",
                "tel" => "0692158546",
                "email" => "o'nell.keyron@gmail.com",
                
            ],

            [
                "nom" => "ULYSS",
                "prenom" => "Jean",
                "tel" => "0692158546",
                "email" => "ulyss.jean@gmail.com",
                
            ]
        ];

        DB::table('clients')->insert(
            $array
        );
    }
}
 