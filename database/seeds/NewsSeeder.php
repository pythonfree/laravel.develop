<?php

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

    private function getData(): array
    {
        $faker = Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->sentence(rand(3, 5)),
                'text' => $faker->realText(rand(100, 300)),
                'isPrivate' => (bool)rand(0,1),
            ];
        }



        return $data;
    }
}
