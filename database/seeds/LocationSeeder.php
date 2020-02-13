<?php

use Illuminate\Database\Seeder;
use App\Location;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Location::create([
   'name'=>'Nairobi'

      ]);

            Location::create([
   'name'=>'Meru'

      ]);
               Location::create([
   'name'=>'Maua'

      ]);         
    }
}
