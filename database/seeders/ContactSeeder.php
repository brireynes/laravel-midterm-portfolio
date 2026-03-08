<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Contact::create([
            'email' => 's2301263@usls.edu.ph',
            'phone' => '09629303613',
            'location' => 'Bacolod City'
        ]);
    }
}
