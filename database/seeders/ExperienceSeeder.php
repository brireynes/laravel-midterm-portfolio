<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'company' => 'Amazon VA',
            'position' => 'Part-Time',
            'year' => 'Inventory listing, promo timing, and fixing suppressed SKUs.'
        ]);

        Experience::create([
            'company' => 'LRC Student Assistant',
            'position' => 'Scholarship',
            'year' => 'Active campus involvement while working at the Learning Resource Center.'
        ]);

        Experience::create([
            'company' => 'HappyCheers Events',
            'position' => 'Freelance',
            'year' => 'Freelance event coordinator for birthdays and weddings since the pandemic.'
        ]);
    }
}