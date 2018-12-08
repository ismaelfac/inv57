<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\PropertiesController;

class FooterContentProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Footer pre-load
        //dd(PropertiesController::getLatestProperties(6)['properties']);
        view()->composer('partials.footer', function($view){
            $view->with('contactInfo', TemplateController::getContactInfo());
            $view->with('latestThreeProperties', PropertiesController::getLatestProperties(2)['properties']);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
