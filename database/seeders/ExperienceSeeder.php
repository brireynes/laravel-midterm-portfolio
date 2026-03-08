<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Experience::create([
            'company' => 'University of St. La Salle',
            'position' => 'Computer Science Student',
            'year' => '2023-Present'
        ]);
    }
}
