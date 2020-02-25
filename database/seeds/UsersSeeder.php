<?php

use Illuminate\Database\Seeder;

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

           
        ];

        DB::table('users')->insert(
            $array
        );
    
    }
}
