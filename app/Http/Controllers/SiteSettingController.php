<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class SiteSettingController extends Controller
{
    public function switchLocale($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }

    public function switchTheme($theme)
    {
        session()->put('theme', $theme);

        return redirect()->back();
    }
}
