<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run()
    {
        $this->call([
            CustomerSeeder::class,
            EmployeeSeeder::class,
            SupplierSeeder::class,
            AdminUserSeeder::class,
            ShipmentSeeder::class,
            OrderSeeder::class,
            UserSeeder::class,
            FeedbackSeeder::class,
            VehicleSeeder::class
           
        ]);
    }

}