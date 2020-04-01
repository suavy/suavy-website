<?php

namespace App\Http\Controllers;

use App\Models\Country;

class HomeController extends Controller {

    public function index() {

        $countries = Country::query()->with(['users'=>function($query){
            $query->where('disabled',false);
        }])->get();

        return view('home.index',compact('countries'));
    }
}
