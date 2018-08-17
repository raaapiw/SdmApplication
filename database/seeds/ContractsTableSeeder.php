<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Employee;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee = Employee::all();
        $faker = Faker::create();
        foreach(range(0,10) as $index){
            DB::table('contracts')->insert([               
                'name' => $faker->name(),
                'employee_id' => $index + 1,            
                // 'start_date' => 11+$index,
                // 'end_date' => $faker->address()
            ]);
        }
    }
}
