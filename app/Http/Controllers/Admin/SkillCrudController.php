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
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class SkillCrudController extends CrudController {
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup() {
        $this->crud->setModel(Skill::class);
        $this->crud->setRoute("admin/skill");
        $this->crud->setEntityNameStrings("compétence", "compétences");
    }

    protected function setupListOperation() {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'slug', 'label' => 'slug']);
        $this->crud->addColumn(['name' => 'name', 'label' => 'name']);
        $this->crud->addColumn(['name' => 'color', 'label' => 'color']);

    }

    protected function setupCreateOperation() {
        $this->crud->addField(['name' => 'slug', 'label' => 'slug','type' => 'text',]);
        $this->crud->addField(['name' => 'name', 'label' => 'name','type' => 'text',]);
    }

    protected function setupUpdateOperation() {
        $this->setupCreateOperation();
    }

}
