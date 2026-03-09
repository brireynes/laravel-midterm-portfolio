<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Brian David L. Reynes',
            'title' => 'Computer Science Student',
            'bio' => 'I am a Computer Science student passionate about software development and game programming.',
            'image' => 'brian.jpg',

            'facebook' => 'https://www.facebook.com/yaboifufu/',
            'instagram' => 'https://www.instagram.com/_davidreynes/',
            'github' => 'https://github.com/brireynes',
            'linkedin' => 'https://linkedin.com'
        ]);
    }
}