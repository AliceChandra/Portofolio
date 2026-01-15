<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    public function about() {
        return view('pages.about');
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
