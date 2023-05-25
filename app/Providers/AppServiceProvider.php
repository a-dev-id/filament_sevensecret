<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        Filament::registerNavigationGroups([
            'Booking',
            'General',
            'Setting',
            'Advance',
        ]);

        Paginator::useBootstrapFive();
    }
}
