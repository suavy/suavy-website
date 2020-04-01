<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
use App\Models\OpenSourceProject;
use App\Models\ProviderCompany;
use App\Models\Establishment;
use App\Models\Group;
use App\Models\Role;
use App\Models\Skill;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class OpenSourceProjectCrudController extends CrudController {
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup() {
        $this->crud->setModel(OpenSourceProject::class);
        $this->crud->setRoute("admin/open-source-project");
        $this->crud->setEntityNameStrings("open source project", "open source projects");
    }

    protected function setupListOperation() {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'slug', 'label' => 'slug']);
        $this->crud->addColumn(['name' => 'name', 'label' => 'name']);
        $this->crud->addColumn(['name' => 'source_link', 'label' => 'source link']);

    }

    protected function setupCreateOperation() {
        $this->crud->addField(['name' => 'slug', 'label' => 'slug','type' => 'text',]);
        $this->crud->addField(['name' => 'name', 'label' => 'name','type' => 'text',]);
        $this->crud->addField(['name' => 'description_fr', 'label' => 'description fr','type' => 'textarea',]);
        $this->crud->addField(['name' => 'description_pt', 'label' => 'description pt','type' => 'textarea',]);
        $this->crud->addField(['name' => 'description_en', 'label' => 'description en','type' => 'textarea',]);
        $this->crud->addField(['name' => 'description_es', 'label' => 'description es','type' => 'textarea',]);
        $this->crud->addField(['name' => 'source_link', 'label' => 'source link','type' => 'text',]);
        $this->crud->addField(['name' => 'website_link', 'label' => 'website link','type' => 'text',]);
        $this->crud->addField(['name' => 'started_at', 'label' => 'Started at','type' => 'date',]);
        $this->crud->addField(['name' => 'ended_at', 'label' => 'Ended at','type' => 'date',]);
    }

    protected function setupUpdateOperation() {
        $this->setupCreateOperation();
    }

}