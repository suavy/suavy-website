<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use CrudTrait;
    use IsTranslatable;

    /*
    |--------------------------------------------------------------------------
    | _Relations
    |--------------------------------------------------------------------------
    */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    /*
    |--------------------------------------------------------------------------
    | _Variables
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'name_fr',
        'name_pt',
        'name_en',
        'name_es',
        'code',
        'map_marker_position_top',
        'map_marker_position_left',
    ];
    protected $dates = ['created_at', 'updated_at'];

    /*
    |--------------------------------------------------------------------------
    | _Accessors
    |--------------------------------------------------------------------------
    */
    public function getFlagRoundedAttribute()
    {
        return asset('images/flags/rounded-rectangle/'.strtolower($this->code).'.svg');
    }

    public function getFlagSquareAttribute()
    {
        return asset('images/flags/square/'.strtolower($this->code).'.svg');
    }

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
}
