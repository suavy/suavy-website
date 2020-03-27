<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    use IsTranslatable;

    protected $fillable = ['slug', 'name', 'description_fr', 'description_pt', 'description_en', 'description_es', 'position_fr', 'position_pt', 'position_en', 'position_es', 'area', 'color', 'color_light', 'freelance', 'started_at', 'ended_at',];
    protected $dates = ['created_at', 'updated_at', 'started_at', 'ended_at',];

    public function skills() { return $this->belongsToMany(Skill::class); }



}
