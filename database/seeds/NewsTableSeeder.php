<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach (range(0,7) as $index) {
          DB::table('news')->insert([
              'title' => $faker->realText(rand(20,40)),
              'body' => $faker->realText(rand(400,500)),
              'reporter' => $faker->name,
              'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
          ]);
      }
    }
}
