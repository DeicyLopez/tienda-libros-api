<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AuthorSeeder::class,
            Book_LiterarySeeder::class,
            BookAuthorSeeder::class,
            BookSeeder::class,
            CategorySeeder::class,
            LiteraryGenreSeeder::class,
        ]);
    }
}
