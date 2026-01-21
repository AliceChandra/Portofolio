<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $user = Auth::user();
        return view('pages.home', compact('user'));
    }
    public function about() {
        $user = Auth::user();
        return view('pages.about', compact('user'));
    }
    public function projects() {
        $user = Auth::user();
        return view('pages.projects', compact('user'));
    }
    public function skills() {
        $user = Auth::user();
        return view('pages.skills', compact('user'));
    }
    public function journey() {
        $user = Auth::user();
        return view('pages.journey', compact('user'));
    }
    public function contacts() {
        $user = Auth::user();
        return view('pages.contacts', compact('user'));
    }
}
