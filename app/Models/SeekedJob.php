<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Illuminate\Database\Eloquent\Model;

class SeekedJob extends Model {

    use IsTranslatable;

    protected $fillable = ['name_fr', 'name_pt', 'name_en', 'name_es',];

    public static function getFormattedForHtml() {
        $seekedJobs = self::all();
        $html = "";
        foreach ($seekedJobs as $seekedJob) {
            $html .= "{$seekedJob->translated_name}";
            if($seekedJobs->last() === $seekedJob) {
                $html .= ".";
            } else {
                $html .= ", ";
            }
        }
        return $html;
    }
}
