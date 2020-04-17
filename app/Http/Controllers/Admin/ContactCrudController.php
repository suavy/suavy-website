<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
use App\Models\City;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Establishment;
use App\Models\Group;
use App\Models\ProviderCompany;
use App\Models\Role;
use App\Models\Skill;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class ContactCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel(Contact::class);
        $this->crud->setRoute('admin/contact');
        $this->crud->setEntityNameStrings('contact', 'contacts');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'name', 'label' => 'name']);
        $this->crud->addColumn(['name' => 'email', 'label' => 'email']);
        $this->crud->addColumn(['name' => 'created_at', 'label' => 'date']);
    }


    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
