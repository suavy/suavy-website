<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
use App\Models\Establishment;
use App\Models\Group;
use App\Models\ProviderCompany;
use App\Models\Role;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class ServiceCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;
    use ReorderOperation;

    public function setup()
    {
        $this->crud->setModel(Service::class);
        $this->crud->setRoute('admin/service');
        $this->crud->setEntityNameStrings('service', 'services');
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
        $this->crud->addField(['name' => 'color', 'label' => 'color', 'type' => 'text']);
        $this->crud->addField(['name' => 'icon', 'label' => 'icon', 'type' => 'text']);
    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'translated_name');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 1);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
