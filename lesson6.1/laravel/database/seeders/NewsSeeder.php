<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Psy\Util\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i<10; $i++) {
            $title = $faker->sentence(mt_rand(3, 10));
            $data[] = [
                'title' => $title,
                'slug' => \Illuminate\Support\Str::slug($title),
                'description' => $faker->realText(mt_rand(100, 200)),
                'published' => true
            ];
        }

        return $data;
    }
}
