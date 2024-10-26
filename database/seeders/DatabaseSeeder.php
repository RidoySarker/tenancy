<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => "Ridoy Sarker",
            'email' => 'csridoy42@gmail.com',
            'password' => 'csridoy42@gmail.com',
        ]);
    }
}
