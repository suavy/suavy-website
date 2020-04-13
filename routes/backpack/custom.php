<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('city', 'CityCrudController');
    Route::crud('country', 'CountryCrudController');
    Route::crud('contact-delivery', 'ContactDeliveryCrudController');
    Route::crud('contact-budget', 'ContactBudgetCrudController');
    Route::crud('interest', 'InterestCrudController');
    Route::crud('open-source-project', 'OpenSourceProjectCrudController');
    Route::crud('project', 'ProjectCrudController');
    Route::crud('project-feature', 'ProjectFeatureCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('skill', 'SkillCrudController');
    Route::crud('user', 'UserCrudController');
}); // this should be the absolute last line of this file
