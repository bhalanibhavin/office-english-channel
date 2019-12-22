<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /** 
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'settings_datesettings_date', 'App\Http\Composers\SettingDataComposer'
        );
        view()->composer(
            'frontend.index', 'App\Http\Composers\SettingDataComposer'
        );
        view()->composer(
            'frontend.index', 'App\Http\Composers\PageContentComposer'
        );
        view()->composer(
            'frontend.blog', 'App\Http\Composers\PageContentComposer'
        );
        view()->composer(
            'frontend.blog-details', 'App\Http\Composers\PageContentComposer'
        );
        view()->composer(
            'frontend.student', 'App\Http\Composers\PageContentComposer'
        );
        view()->composer(
            'frontend.trial-ielts', 'App\Http\Composers\PageContentComposer'
        );
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
