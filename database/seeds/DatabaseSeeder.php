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
         $this->call(ServiceTableSeeder::class);
         $this->call(VendorsTableSeeder::class);
         $this->call(RolePermissionSeeder::class);
         $this->call(LocationSeeder::class);
    }
}
