<?php

namespace App\Models;

use App\Traits\IsTranslatable;
use Illuminate\Database\Eloquent\Model;

class WhereSeekedJob extends Model {

    use IsTranslatable;

    protected $fillable = ['name_fr', 'name_pt', 'name_en', 'name_es', 'country_flag_image'];

    public static function getFormattedForHtml() {
        $whereSeekedJobs = self::all();
        $html = "";
        foreach ($whereSeekedJobs as $whereSeekedJob) {
            if($asset = $whereSeekedJob->country_flag_image) {
                $html .= "<img src='{$asset}'/>";
            }
            $html .= "{$whereSeekedJob->translated_name}";
            if($whereSeekedJobs->last() === $whereSeekedJob) {
                $html .= ".";
            } elseif($whereSeekedJobs[count($whereSeekedJobs)-2] === $whereSeekedJob) {
                $html .= " ".trans('cv.or')." ";
            } else {
                $html .= ", ";
            }
        }
        return $html;
    }

}
