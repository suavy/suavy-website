<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait IsTranslatable
{
    /*
    |--------------------------------------------------------------------------
    | _Accessors
    |--------------------------------------------------------------------------
    */
    public function getTranslatedNameAttribute()
    {
        return  $this->getAttributeWithLocale('name');
    }

    public function getTranslatedDescriptionAttribute()
    {
        return $this->getAttributeWithLocale('description');
    }

    public function getTranslatedPositionAttribute()
    {
        return $this->getAttributeWithLocale('position');
    }

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
    public function getAttributeWithLocale(string $attribute)
    {
        try {
            $locale = App::getLocale();
            $attributeWithLocale = $attribute.'_'.$locale;
            if (! is_null($attributeWithLocale)) {
                return $this->$attributeWithLocale;
            } else {
                return $this->getAttributeWithFallBackLocale($attribute);
            }
        } catch (\Exception $exception) {
        }
    }

    public function getAttributeWithFallBackLocale(string $attribute)
    {
        $fallbackLocale = config('app.fallback_locale');
        $fallbackAttributeWithLocale = $attribute.'_'.$fallbackLocale;

        return $this->$fallbackAttributeWithLocale;
    }

}
