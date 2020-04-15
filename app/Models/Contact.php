<?php

namespace App\Models;

use App\Models\Metas\Budget;
use App\Models\Metas\Delivery;
use App\Traits\IsTranslatable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use CrudTrait;
    use IsTranslatable;
    use Notifiable;

    /*
    |--------------------------------------------------------------------------
    | _Relations
    |--------------------------------------------------------------------------
    */
    public function budgets()
    {
        return $this->belongsToMany(Budget::class,'contact_budget');
    }

    public function deliveries()
    {
        return $this->belongsToMany(Delivery::class,'contact_delivery');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class,'contact_service');
    }

    /*
    |--------------------------------------------------------------------------
    | _Variables
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'email',
        'name',
        'message',
    ];
    protected $dates = ['created_at', 'updated_at'];

    /*
    |--------------------------------------------------------------------------
    | _Accessors
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | _Mutators
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | _Scopes
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | _Functions
    |--------------------------------------------------------------------------
    */

    public function routeNotificationForDiscord()
    {
        return '699560727366729779';
    }
}
