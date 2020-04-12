<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use App\Models\Establishment;
use App\Models\Group;
use App\Models\ProviderCompany;
use App\Models\Role;
use App\Models\User;
use App\Notifications\UserCreated;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Illuminate\Support\Facades\Hash;

class UserCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation { store as traitStore; }
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;
    use ReorderOperation;

    public function setup()
    {
        $this->crud->setModel(User::class);
        $this->crud->setRoute('admin/user');
        $this->crud->setEntityNameStrings('utilisateur', 'utilisateurs');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'id', 'label' => '#']);
        $this->crud->addColumn(['name' => 'email', 'label' => 'Email']);
        $this->crud->addColumn(['name' => 'firstname', 'label' => 'Firstname']);
        $this->crud->addColumn(['name' => 'lastname', 'label' => 'Lastname']);
        $this->crud->addColumn(['name' => 'country.name', 'label' => 'Country']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->addField(['name' => 'email', 'label' => 'Email', 'type' => 'text', 'wrapperAttributes' => ['class' => 'form-group col-md-6']]);
        $this->crud->addField(['name' => 'firstname', 'label' => 'Firstname', 'type' => 'text', 'wrapperAttributes' => ['class' => 'form-group col-md-6']]);
        $this->crud->addField(['name' => 'lastname', 'label' => 'Lastname', 'type' => 'text', 'wrapperAttributes' => ['class' => 'form-group col-md-6']]);

        $this->crud->addField([
            'name' => 'city_id',
            'label' => 'City',
            'type' => 'select',
            'entity' => 'city',
            'model' => City::class,
            'attribute' => 'translated_name',
            'wrapperAttributes' => ['class' => 'form-group col-md-6'],
        ]);
        $this->crud->addField([
            'name' => 'country_id',
            'label' => 'Country',
            'type' => 'select',
            'entity' => 'country',
            'model' => Country::class,
            'attribute' => 'translated_name',
            'wrapperAttributes' => ['class' => 'form-group col-md-6'],
        ]);

        $this->crud->addField([
            'label' => 'Picture',
            'name' => 'picture',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'aspect_ratio' => 1,
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        $this->crud->set('reorder.label', 'firstname');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 1);
    }
}
