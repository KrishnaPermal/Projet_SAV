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
                "tel" => "0692158546",
                "email" => "taylor.harry@gmail.com",
                
            ],

            [
                "id" => 3,
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
 