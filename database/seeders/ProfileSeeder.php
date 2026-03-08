<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Profile::create([
            'name' => 'Brian Reynes',
            'title' => 'Computer Science Student',
            'bio' => 'Aspiring software developer and game programmer.'
        ]);
    }
}
