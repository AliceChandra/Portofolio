<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformalEducationController extends Controller
{
    public function academics() {
        return view('journey_content.informal_education.academics');
    }

    public function seminars() {
        return view('journey_content.informal_education.seminars');
    }

    public function trainings() {
        return view('journey_content.informal_education.trainings');
    }

    public function community_services() {
        return view('journey_content.informal_education.comserv');
    }
}
