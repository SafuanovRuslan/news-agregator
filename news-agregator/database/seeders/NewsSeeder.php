<?php

namespace Database\Seeders;

use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $faker = Factory::create();
        for($i = 0; $i < 50; $i++) {
            $data[] = [
                'title' => $faker->jobTitle(),
                'body' => $faker->text(100),
                'img_url' => 'https://image.com',
                'category_id' => $i % 5 + 1,
                'source' => 'https://source.com',
            ];
        }

        return $data;
    }
}
