<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Continent;
use App\Models\Contry;
use App\Models\Product;
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
        // //add all continent 
        // $continents = [
        //     'Africa',
        //     'Antarctica',
        //     'Asia',
        //     'Australia',
        //     'Europe',
        //     'North America',
        //     'South America',
        // ];

        // // foreach
        // foreach ($continents as $continent) {
        //     Continent::create([
        //         'name' => $continent,
        //     ])->each(function ($c){
        //         $c->countries()->saveMany(
        //             Contry::factory()->count(15)->make()
        //         );
        //     });
        // }

        Product::factory(200)->create();
    }
}
