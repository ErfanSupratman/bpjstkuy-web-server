<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create default user
        DB::table('users')->insert([
            'name' => 'Ashari Fachrizal Nuhrintama',
            'email' => 'user0@example.com',
            'password' => Hash::make('123456'),
            'nik' => '9171050000000012',
            'place_birth' => 'Jayapura',
            'dob' => '1995-05-01',
            'address' => 'Jl. Adhiyaksa Raya No. 27, Sukapura, Bandung',
            'path_dp' => 'user0.jpg',
        ]);

        // generate random user from faker
        $faker = Faker::create();
        foreach (range(1,7) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => 'user' . $index . '@example.com',
                'password' => Hash::make('123456'),
                'nik' => '917105000000000' . $index,
                'place_birth' => 'Kota ' . $index,
                'dob' => $faker->date($format = 'Y-m-d', $max = '-18 years'),
                'address' => $faker->address,
                'path_dp' => 'user' . $index . '.jpg',
            ]);
        }
    }
}
