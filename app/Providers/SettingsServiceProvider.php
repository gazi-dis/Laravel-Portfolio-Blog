<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\Schema;

class SettingsServiceProvider extends ServiceProvider
{
   
    public function boot(Factory $cache, Setting $settings)
    {
        if (Schema::hasTable('settings')) {
            $settings = $cache->remember('settings', 60, function() use ($settings)
            {
                return $settings->pluck('value', 'slug')->all();
            });
        
            config()->set('settings', $settings);
        }
    }
 
    public function register()
    {
        //
    }
}
