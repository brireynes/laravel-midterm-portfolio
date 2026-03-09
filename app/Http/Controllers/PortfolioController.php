<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function home()
    {
        $profile = Profile::first();
        return view('home', compact('profile'));
    }

    public function skills()
    {
    $hardSkills = Skill::where('type', 'hard')->get();
    $softSkills = Skill::where('type', 'soft')->get();

    return view('skills', compact('hardSkills', 'softSkills'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function experience()
    {
        $experiences = Experience::all();
        return view('experience', compact('experiences'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('contact', compact('contact'));
    }
}