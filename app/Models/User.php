<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use CrudTrait;
    use Notifiable;

    /*
    |--------------------------------------------------------------------------
    | _Relations
    |--------------------------------------------------------------------------
    */
    public function country(){          return $this->belongsTo(Country::class);}
    public function city(){             return $this->belongsTo(City::class);}
    public function interests(){        return $this->belongsToMany(Interest::class); }
    public function skills(){           return $this->belongsToMany(Skill::class); }


    /*
    |--------------------------------------------------------------------------
    | _Variables
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
        'disabled',
        'picture',
        'city_id',
        'country_id'];
    protected $hidden = ['password', 'remember_token',];
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
