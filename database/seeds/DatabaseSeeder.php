<?php

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
        $this->call([
            TeaqsTableSeeder::class,
            HerbqsTableSeeder::class,
            TeasTableSeeder::class,
            HerbteasTableSeeder::class,
            MoodsTableSeeder::class,
        ]);
    }
}
