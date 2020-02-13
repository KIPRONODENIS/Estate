<?php

use Illuminate\Database\Seeder;
use App\Service;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services=Service::all();
        foreach($services as $service) {
        	$service->users()->attach([1=>['details'=>\Str::random(40)],
         2=>['details'=>\Str::random(30)],
         3=>['details'=>\Str::random(30)]

        ]);
        }
    }
}
