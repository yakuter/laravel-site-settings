<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/* ADDED lines ***** */
use Illuminate\Contracts\Cache\Factory;
use App\Setting;
/* //ADDED lines ***** */

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Factory $cache, Setting $settings)
    {

            $settings = $cache->remember('settings', 60, function() use ($settings)
            {
                return $settings->pluck('value', 'slug')->all();
            });

            config()->set('settings', $settings);

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
