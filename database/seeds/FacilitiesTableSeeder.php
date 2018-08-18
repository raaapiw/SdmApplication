<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Contract;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contracts = Contract::all();
        $faker = Faker::create();
        foreach(range(0,10) as $index){
            DB::table('facilities')->insert([       
                'contract_id' => 1+$index,
                'facility' => $faker->address($maxNbChars = 190),
            ]);
        }
    }
}
