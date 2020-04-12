<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use CrudTrait;
    use IsTranslatable;

    /*
    |--------------------------------------------------------------------------
    | _Relations
    |--------------------------------------------------------------------------
    */
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function features()
    {
        return $this->hasMany(ProjectFeature::class);
    }

    /*
    |--------------------------------------------------------------------------
    | _Variables
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'slug',
        'name',
        'description_fr',
        'description_pt',
        'description_en',
        'description_es',
        'area',
        'company_logo',
        'color',
        'color_light',
        'disabled',
        'started_at',
        'ended_at',
        'lft',
        'rgt',
        'depth',
        'parent_id',
    ];
    protected $dates = ['created_at', 'updated_at', 'started_at', 'ended_at'];

    /*
    |--------------------------------------------------------------------------
    | _Accessors
    |--------------------------------------------------------------------------
    */
    public function getCompanyLogoAttribute($value)
    {
        return asset('storage/'.$value);
    }

    /*
    |--------------------------------------------------------------------------
    | _Mutators
    |--------------------------------------------------------------------------
    */
    public function setCompanyLogoAttribute($value)
    {
        $attribute_name = 'company_logo';
        $disk = 'public';
        $destination_path = 'company_logos';

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

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
