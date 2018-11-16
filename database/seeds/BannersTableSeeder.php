<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach (range(0,3) as $index) {
          DB::table('banners')->insert([
              'caption' => $faker->realText(rand(20,40)),
              'path' => 'banner' . ($index + 1) . '.jpg',
              'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
          ]);
      }
    }
}
