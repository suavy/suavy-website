<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model {

    use IsTranslatable;

    protected $fillable = ['icon', 'name_fr', 'name_pt', 'name_en', 'name_es',];

}
