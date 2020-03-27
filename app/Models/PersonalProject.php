<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Illuminate\Database\Eloquent\Model;

class PersonalProject extends Model {

    use IsTranslatable;

    protected $fillable = ['slug', 'name', 'description_fr', 'description_pt', 'description_en', 'description_es', 'color', 'color_light', 'started_at', 'ended_at', 'source_link', 'website_link'];
    protected $dates = ['created_at', 'updated_at', 'started_at', 'ended_at',];

    //todo public function skills() { return $this->belongsToMany(Skill::class); }

}
