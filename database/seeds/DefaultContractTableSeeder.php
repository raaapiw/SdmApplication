<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DefaultContractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach(range(0,10) as $index){
            DB::table('default_contracts')->insert([               
                'name' => $faker->name(),             
                'jabatan' => 11+$index,
                'degree' => $faker->century(),   
                'gapok' => $faker->year(),
                'tunkin' => $faker->ean8(),
                'tunjab' => $faker->ean8(),
                'tunpresjab' => $faker->ean8()
            ]);
        }
    }
}
