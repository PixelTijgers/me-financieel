<?php

// Namespacing.
namespace App\Providers;

// Facades.
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // App ViewComposers
        view::composer('*', \App\Http\ViewComposers\NameSpaceViewComposer::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
