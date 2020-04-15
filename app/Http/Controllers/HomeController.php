<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Country;
use App\Models\Metas\Budget;
use App\Models\Metas\ContactBudget;
use App\Models\Metas\ContactDelivery;
use App\Models\Metas\Delivery;
use App\Models\OpenSourceProject;
use App\Models\Project;
use App\Models\Service;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {

        $countries = Country::query()->with(['users'=>function ($query) {
            $query->where('disabled', false);
        }])->whereNotNull('map_marker_position_top')->get();

        $projects = Project::query()->with(['skills', 'features'=>function ($query) {
            $query->orderBy('lft');
        }])->where('disabled', false)->get();

        $openSourceProjects = OpenSourceProject::query()->get();

        $services = Service::query()->orderBy('lft')->get();

        $contactDeliveries = Delivery::forSelect();
        $contactBudgets = Budget::forSelect();
        $contactServices = Service::query()->take(4)->forSelect();

        return view('home.index', compact('countries', 'services', 'openSourceProjects', 'projects','contactDeliveries','contactBudgets','contactServices'));
    }

    public function contact(Request $request){

        $contact = new Contact($request->input('contact'));
        $contact->save();
        $contact->services()->sync($request->input('contact.services'));
        $contact->budgets()->sync($request->input('contact.budgets'));
        $contact->deliveries()->sync($request->input('contact.deliveries'));

        $contact->notify(new ContactNotification($contact));

        return redirect()->to('/#contact');
    }
}
