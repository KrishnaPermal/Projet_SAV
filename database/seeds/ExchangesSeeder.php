<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                "commentaire" => "Lorem ipsum dolor sit amet consectetur adipisicing",
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
