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
        AuthorsTableSeeder::class;
        AuthorsInfoTableSeeder::class;
        GenresTableSeeder::class;
        ComicsTableSeeder::class;
    }
}