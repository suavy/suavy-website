<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\OpenSourceProject;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $countries = Country::query()->with(['users'=>function ($query) {
            $query->where('disabled', false);
        }])->get();

        $projects = Project::query()->with(['skills', 'features'=>function ($query) {
            $query->orderBy('lft');
        }])->where('disabled', false)->get();

        $openSourceProjects = OpenSourceProject::query()->get();

        $services = Service::query()->orderBy('lft')->get();

        return view('home.index', compact('countries', 'services', 'openSourceProjects', 'projects'));
    }
}
