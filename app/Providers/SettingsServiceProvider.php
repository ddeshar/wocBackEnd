<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\WocSettings;
use App\Models\Settings;

use View;

class SettingsServiceProvider extends ServiceProvider{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(WocSettings $settinsInstance){
        View::share('WocSettings', $settinsInstance);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        $this->app->singleton('App\Models\WocSettings', function ($app) {
            return new WocSettings(Settings::all());
        });
    }
}
