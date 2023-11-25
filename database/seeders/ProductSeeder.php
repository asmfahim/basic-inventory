<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<10;$i++){
            $data = new Product();
            $data->name = $faker->name;
            $data->quantity = $faker->numberBetween(1,1000);
            $data->price = $faker->numberBetween(1,1000);
            $data->save();
        }

    }
}
