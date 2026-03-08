<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create or update the test user
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Ensure you set a password
            ]
        );

        // call your seeders
        $this->call([
            ProfileSeeder::class,
            SkillSeeder::class,
            ProjectSeeder::class,
            ExperienceSeeder::class,
            ContactSeeder::class
        ]);
    }
}