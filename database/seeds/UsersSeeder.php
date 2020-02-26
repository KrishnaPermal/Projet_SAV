<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
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
                "nom" => "DIJOUX",            
            ],

            [
                "id" => 2,
                "nom" => "JULIENNE",
            ],

            [
                "id" => 3,
                "nom" => "JAMS",
            ],

            [
                "id" => 4,
                "nom" => "TANTALIDÈS--PERMALNAÏKEN",
            ],

            [
                "id" => 5,
                "nom" => "PERSÉE",
            ],

            [
                "id" => 6,
                "nom" => "O'CONNOR",
            ],

            [
                "id" => 7,
                "nom" => "KANNI",
            ],

           
        ];

        DB::table('users')->insert(
            $array
        );
    
    }
}
