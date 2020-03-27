<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

    protected $fillable = ['slug', 'name', 'color', 'color_light', 'parent_id'];

    public function childs() { return $this->hasMany(Skill::class, 'parent_id', 'id'); }
    public function projects() { return $this->belongsToMany(Project::class); }


}
