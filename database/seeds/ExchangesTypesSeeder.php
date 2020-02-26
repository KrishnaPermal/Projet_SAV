<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangesTypesSeeder extends Seeder
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
                "type" => 'telephone',
                
            ],

            [
                "id" => 2,
                "type" => 'email',
                
            ],

        ];

        DB::table('exchanges_types')->insert(
            $array
        );
    
    }
}
