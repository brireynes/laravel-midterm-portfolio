<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Skill::create([
            'skill_name' => 'Laravel',
            'level' => 80
        ]);
    
        Skill::create([
            'skill_name' => 'PHP',
            'level' => 75
        ]);
    
        Skill::create([
            'skill_name' => 'JavaScript',
            'level' => 70
        ]);
    }
}
