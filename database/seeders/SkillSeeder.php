<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        // Hard Skills
        Skill::create([
            'skill_name' => 'Unity Game Development',
            'level' => 80,
            'type' => 'hard'
        ]);

        Skill::create([
            'skill_name' => 'C# Programming',
            'level' => 75,
            'type' => 'hard'
        ]);

        Skill::create([
            'skill_name' => 'Laravel Web Development',
            'level' => 70,
            'type' => 'hard'
        ]);

        Skill::create([
            'skill_name' => 'Database Management (MySQL)',
            'level' => 70,
            'type' => 'hard'
        ]);

        // Soft Skills
        Skill::create([
            'skill_name' => 'Problem Solving',
            'level' => 85,
            'type' => 'soft'
        ]);

        Skill::create([
            'skill_name' => 'Communication',
            'level' => 80,
            'type' => 'soft'
        ]);

        Skill::create([
            'skill_name' => 'Team Collaboration',
            'level' => 85,
            'type' => 'soft'
        ]);

        Skill::create([
            'skill_name' => 'Adaptability',
            'level' => 80,
            'type' => 'soft'
        ]);
    }
}