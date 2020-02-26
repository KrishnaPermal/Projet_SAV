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
                "id" => 1,
                "nom" => "WILLIAMS",
                "prenom" => "Joe",
                "tel" => "0692158546",
                "email" => "williams.joe@gmail.com",
                
            ],

            [
                "id" => 2,
                "nom" => "TAYLOR",
                "prenom" => "Harry",
                "tel" => "0692458547",
                "email" => "taylor.harry@gmail.com",
                
            ],

            [
                "id" => 3,
                "nom" => "MILLER",
                "prenom" => "James",
                "tel" => "0692958763",
                "email" => "miller.james@gmail.com",
                
            ],

            [
                "id" => 4,
                "nom" => "RODRIGUEZ",
                "prenom" => "Alexander",
                "tel" => "0692784920",
                "email" => "rodriguez.alexander@gmail.com",
                
            ],

            [
                "id" => 5,
                "nom" => "ROBERTS",
                "prenom" => "Ethan",
                "tel" => "0692356213",
                "email" => "roberts.ethan@gmail.com",
                
            ],

            [
                "id" => 6,
                "nom" => "MURPHY",
                "prenom" => "Kyle",
                "tel" => "0692412973",
                "email" => "murphy.kyle@gmail.com",
                
            ],

            [
                "id" => 7,
                "nom" => "GARCIA",
                "prenom" => "Oliver",
                "tel" => "0692957315",
                "email" => "garcia.oliver@gmail.com",
                
            ],
        ];

        DB::table('clients')->insert(
            $array
        );
    }
}
 