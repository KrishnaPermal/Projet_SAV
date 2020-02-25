<?php

use Illuminate\Database\Seeder;

class ExchangesSeeder extends Seeder
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
                "commentaire" => "blabla",
                "date" => "2020-01-02",
                "id_users" => 1,
                "id_clients" => 1,
                "id_exchange_types" => 1 ,
                
            ],

          
        ];

        DB::table('exchanges')->insert(
            $array
        );
    }
}
