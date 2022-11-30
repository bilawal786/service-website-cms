<?php

namespace App\Providers;
use App\Category;
use App\Service;
use App\WebsiteImage;
use Illuminate\Support\ServiceProvider;

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
        view()->share('categories',Category::all());
        view()->share('services',Service::all());
        view()->share('websiteImages',WebsiteImage::first());
    }
}
