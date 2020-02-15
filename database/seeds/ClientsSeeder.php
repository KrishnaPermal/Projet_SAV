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
                "nom" => "WILLIAMS",
                "prenom" => "Joe",
                "tel" => "0692158546",
                "email" => "williams.joe@gmail.com",
                
            ],

            [
                "nom" => "TAYLOR",
                "prenom" => "Harry",
                "tel" => "0692158546",
                "email" => "taylor.harry@gmail.com",
                
            ],

            [
                "nom" => "MILLER",
                "prenom" => "James",
                "tel" => "0692158546",
                "email" => "miller.james@gmail.com",
                
            ]
        ];

        DB::table('clients')->insert(
            $array
        );
    }
}
 