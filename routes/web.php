<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::post('/contact', 'HomeController@contact')->name('contact');
Route::get('switch-locale/{locale}', 'SiteSettingController@switchLocale')->name('switch-locale');
Route::get('switch-theme/{theme}', 'SiteSettingController@switchTheme')->name('switch-theme');
