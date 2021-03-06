<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use CrudTrait;
    use IsTranslatable;

    /*
    |--------------------------------------------------------------------------
    | _Relations
    |--------------------------------------------------------------------------
    */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    /*
    |--------------------------------------------------------------------------
    | _Variables
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'color',
        'icon',
        'name_fr',
        'name_pt',
        'name_en',
        'name_es',
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
}
