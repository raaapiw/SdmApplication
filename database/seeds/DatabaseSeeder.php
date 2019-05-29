<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(ContractsTableSeeder::class);
        $this->call(DefaultContractTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(FacilitiesTableSeeder::class);
    }
}
