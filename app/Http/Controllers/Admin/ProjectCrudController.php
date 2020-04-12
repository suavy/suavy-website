<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
use App\Models\Establishment;
use App\Models\Group;
use App\Models\Project;
use App\Models\ProviderCompany;
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

class ProjectCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;
    use ReorderOperation;

    public function setup()
    {
        $this->crud->setModel(Project::class);
        $this->crud->setRoute('admin/project');
        $this->crud->setEntityNameStrings('project', 'projects');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'disabled', 'label' => 'disabled']);
        $this->crud->addColumn(['name' => 'slug', 'label' => 'slug']);
        $this->crud->addColumn(['name' => 'name', 'label' => 'name']);
        $this->crud->addColumn(['name' => 'started_at', 'label' => 'Started at']);
        $this->crud->addColumn(['name' => 'ended_at', 'label' => 'Ended at']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addField(['name' => 'disabled', 'label' => 'disabled', 'type' => 'checkbox']);
        $this->crud->addField(['name' => 'slug', 'label' => 'slug', 'type' => 'text']);
        $this->crud->addField(['name' => 'name', 'label' => 'name', 'type' => 'text']);
        $this->crud->addField(['name' => 'description_fr', 'label' => 'description fr', 'type' => 'textarea']);
        $this->crud->addField(['name' => 'description_pt', 'label' => 'description pt', 'type' => 'textarea']);
        $this->crud->addField(['name' => 'description_en', 'label' => 'description en', 'type' => 'textarea']);
        $this->crud->addField(['name' => 'description_es', 'label' => 'description es', 'type' => 'textarea']);
        $this->crud->addField(['name' => 'started_at', 'label' => 'Started at', 'type' => 'date']);
        $this->crud->addField(['name' => 'ended_at', 'label' => 'Ended at', 'type' => 'date']);
        $this->crud->addField([
            'name' => 'skills',
            'label' => 'Skills',
            'type' => 'select2_multiple',
            'entity' => 'skills',
            'model' => Skill::class,
            'attribute' => 'name',
            'pivot' => true, /* Do not remove this or saving will fail */
        ]);
        $this->crud->addField([   // Upload
            'name' => 'company_logo',
            'label' => 'Company logo',
            'type' => 'upload',
            'upload' => true,
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'name');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 1);
    }
}
