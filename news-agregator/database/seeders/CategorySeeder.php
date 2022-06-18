<?php

namespace Database\Seeders;

use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $faker = Factory::create();
        for($i = 0; $i < 5; $i++) {
            $data[] = [
                'name' => $faker->jobTitle(),
            ];
        }

        return $data;
    }
}
