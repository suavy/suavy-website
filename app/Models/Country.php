<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    use CrudTrait;
    use IsTranslatable;

    /*
    |--------------------------------------------------------------------------
    | _Relations
    |--------------------------------------------------------------------------
    */
    public function cities(){          return $this->belongsToMany(City::class);}
    public function users(){           return $this->hasMany(User::class);}

    /*
    |--------------------------------------------------------------------------
    | _Variables
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'flag_image',
        'name_fr',
        'name_pt',
        'name_en',
        'name_es',
        'code',
        'map_marker_position_top',
        'map_marker_position_left'
    ];
    protected $dates = ['created_at', 'updated_at',];

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


}
