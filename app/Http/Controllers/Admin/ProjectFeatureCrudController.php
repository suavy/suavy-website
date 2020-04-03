<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
use App\Models\Project;
use App\Models\ProjectFeature;
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
use Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class ProjectFeatureCrudController extends CrudController {
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;
    use ReorderOperation;

    public function setup() {
        $this->crud->setModel(ProjectFeature::class);
        $this->crud->setRoute("admin/project-feature");
        $this->crud->setEntityNameStrings("project feature", "project features");
    }


    protected function setupListOperation() {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'name_fr', 'label' => 'feature']);
        $this->crud->addColumn(['name' => 'project.name', 'label' => 'project name']);
    }

    protected function setupCreateOperation() {
        $this->crud->addField(['name' => 'name_fr', 'label' => 'name fr','type' => 'textarea',]);
        $this->crud->addField(['name' => 'name_pt', 'label' => 'name pt','type' => 'textarea',]);
        $this->crud->addField(['name' => 'name_en', 'label' => 'name en','type' => 'textarea',]);
        $this->crud->addField(['name' => 'name_es', 'label' => 'name es','type' => 'textarea',]);
        $this->crud->addField(['name' => 'order', 'label' => 'Order','type' => 'number',]);
        $this->crud->addField([
            'name' => 'project_id',
            'label' => 'Project',
            'type' => 'select',
            'entity' => 'project',
            'model' => Project::class,
            'attribute' => 'name',
            'wrapperAttributes' => ['class' => 'form-group col-md-6'],
        ]);
    }

    protected function setupUpdateOperation() {
        $this->setupCreateOperation();
    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'translated_name');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 1);
    }


}
