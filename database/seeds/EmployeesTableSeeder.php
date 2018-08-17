<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
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
            DB::table('employees')->insert([               
                'name' => $faker->name(),
                'address' => $faker->address(),   
                'graduated_from' => $faker->phoneNumber (),
                'degree' => $faker->company()
            ]);
        }
    }
}
