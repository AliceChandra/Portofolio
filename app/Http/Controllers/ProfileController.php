<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view(
            'pages.about', [
                'name' => 'Alice Chandra',
                'major' => 'Master Track of Information Technology',
                'skills' => ['Laravel', 'HTML', 'JavaScript', 'CSS', 'C', 'Python', 'Java', 'SQL Database']
            ]
        );
    }

    public function projects() {
        return view('pages.projects');
    }

    public function skills() {
        return view('pages.skills');
    }

    public function journey() {
        return view('pages.journey');
    }

    public function contacts() {
        return view('pages.contacts');
    }
}
