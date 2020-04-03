<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
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

class SkillCrudController extends CrudController {
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;
    use ReorderOperation;

    public function setup() {
        $this->crud->setModel(Skill::class);
        $this->crud->setRoute("admin/skill");
        $this->crud->setEntityNameStrings("skill", "skills");
    }

    protected function setupListOperation() {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'slug', 'label' => 'slug']);
        $this->crud->addColumn(['name' => 'name', 'label' => 'name']);
        $this->crud->addColumn(['name' => 'color', 'label' => 'color']);
        $this->crud->addColumn(['name' => 'color_light', 'label' => 'color light']);
        $this->crud->addColumn(['name' => 'parent.name', 'label' => 'skill parent']);
    }

    protected function setupCreateOperation() {
        $this->crud->addField(['name' => 'slug', 'label' => 'slug','type' => 'text',]);
        $this->crud->addField(['name' => 'name', 'label' => 'name','type' => 'text',]);
        $this->crud->addField(['name' => 'color', 'label' => 'color','type' => 'text',]);
        $this->crud->addField(['name' => 'color_light', 'label' => 'color_light','type' => 'text',]);
        $this->crud->addField([
            'name' => 'parent_id',
            'label' => 'skill parent',
            'type' => 'select',
            'entity' => 'parent',
            'model' => Skill::class,
            'attribute' => 'name',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'],
        ]);
    }

    protected function setupUpdateOperation() {
        $this->setupCreateOperation();
    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'name');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 2);
    }


}
