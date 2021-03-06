<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
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

class CountryCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel(Country::class);
        $this->crud->setRoute('admin/country');
        $this->crud->setEntityNameStrings('country', 'countries');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'name_fr', 'label' => 'name fr']);
        $this->crud->addColumn(['name' => 'name_pt', 'label' => 'name pt']);
        $this->crud->addColumn(['name' => 'name_en', 'label' => 'name en']);
        $this->crud->addColumn(['name' => 'name_es', 'label' => 'name es']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addField(['name' => 'name_fr', 'label' => 'name fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_pt', 'label' => 'name pt', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'label' => 'name en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_es', 'label' => 'name es', 'type' => 'text']);
        $this->crud->addField(['name' => 'flag_image', 'label' => 'flag', 'type' => 'text']);
        $this->crud->addField(['name' => 'code', 'label' => 'country code', 'type' => 'text']);
        $this->crud->addField(['name' => 'map_marker_position_top', 'label' => 'map marker position top', 'type' => 'number']);
        $this->crud->addField(['name' => 'map_marker_position_left', 'label' => 'map marker position left', 'type' => 'number']);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
