<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Page;
use App\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Main web site menu
        $websiteMenu = [
            '/' => 'Home'
        ];

        $pages = Page::all();
        foreach ($pages as $page) {
            $websiteMenu[ $page['slug'] ] = $page['title'];
        }

        View::share('websiteMenu', $websiteMenu);

        // Settings
        $websiteSettings = [];
        $dbSettings = Setting::all();

        foreach ($dbSettings as $dbSettings) {
            $websiteSettings[ $dbSettings['name'] ] = $dbSettings['content'];
        }

        View::share('websiteSettings', $websiteSettings);
    }
}
