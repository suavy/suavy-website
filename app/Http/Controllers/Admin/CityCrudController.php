<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
use App\Models\City;
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

class CityCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel(City::class);
        $this->crud->setRoute('admin/city');
        $this->crud->setEntityNameStrings('city', 'cities');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'name_fr', 'label' => 'name fr']);
        $this->crud->addColumn(['name' => 'name_pt', 'label' => 'name pt']);
        $this->crud->addColumn(['name' => 'name_en', 'label' => 'name en']);
        $this->crud->addColumn(['name' => 'name_es', 'label' => 'name es']);
        $this->crud->addColumn(['name' => 'country.translated_name', 'label' => 'country']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addField(['name' => 'name_fr', 'label' => 'name fr', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_pt', 'label' => 'name pt', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_en', 'label' => 'name en', 'type' => 'text']);
        $this->crud->addField(['name' => 'name_es', 'label' => 'name es', 'type' => 'text']);
        $this->crud->addField([
            'name' => 'country_id',
            'label' => 'country',
            'type' => 'select',
            'entity' => 'country',
            'model' => Country::class,
            'attribute' => 'translated_name',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'],
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
