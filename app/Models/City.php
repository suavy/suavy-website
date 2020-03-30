<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Illuminate\Database\Eloquent\Model;

class City extends Model {

    use IsTranslatable;

    /*
    |--------------------------------------------------------------------------
    | _Relations
    |--------------------------------------------------------------------------
    */
    public function country(){          return $this->belongsTo(Country::class);}

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
        'country_id'
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