<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        // Buat 25 artikel dummy
        for ($i = 0; $i < 25; $i++) {
            // Generate angka acak 0 hingga 100
            $ISBN = $faker->numberBetween(0, 100);
            $Judul = $faker->sentence(10);
            $Halaman = $faker->numberBetween(0, 100);
            $Penerbit = $faker->sentence(2);
            $created_at = $faker->dateTimeBetween('-3 months', 'now');
            $updated_at = $faker->dateTimeBetween('-1 months', 'now');

            DB::table('books')->insert([
                'ISBN' => $ISBN,
                'Judul' => $Judul,
                'Penerbit' => $Penerbit,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
    }
}
}
