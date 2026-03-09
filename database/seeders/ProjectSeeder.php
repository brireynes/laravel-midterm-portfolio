<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Project::create([
            'title' => 'After Hours',
            'description' => 'Narrative driven game project.',
            'image' => 'afterhours.jpg'
        ]);

        Project::create([
            'title' => '3D Object / Weapon Design',
            'description' => 'Fantasy-inspired dagger model highlighting silhouette and texturing.',
            'image' => 'Weapon.png'
        ]);

        Project::create([
            'title' => 'Organic 3D Character',
            'description' => 'Stylized character with focus on proportions and topology.',
            'image' => 'Character.png'
        ]);

        Project::create([
            'title' => 'JavaFlex',
            'description' => 'Console RPG in Java with ASCII art and a simple battle loop.',
            'image' => 'Javaflex.jpg'
        ]);

        Project::create([
            'title' => 'PetSim',
            'description' => 'Virtual pet simulator managing hunger, happiness, and energy.',
            'image' => 'Petsim.jpg'
        ]);
    }
}