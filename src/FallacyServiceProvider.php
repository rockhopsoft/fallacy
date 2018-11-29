<?php
namespace Fallacy;

use Illuminate\Support\ServiceProvider;

class FallacyServiceProvider extends ServiceProvider
{
    public function register()
    {
        /*
        $this->app->bind('wikiworldorder-survloop', function()
        {
            return new Demo;
        });
        */
    }

    public function boot()
    {
        require __DIR__ . '/routes.php';
        //$migFile = '2016_11_20_000000_Fallacy_create_tables.php';
        $this->publishes([
              __DIR__.'/Views'         => base_path('resources/views/vendor/fallacy'),
              __DIR__.'/Models'        => base_path('app/Models/Fallacy'),
              __DIR__.'/Models'        => base_path('app/Models'),
              __DIR__.'/Uploads'       => base_path('storage/app/up/fallacy'),
              /* __DIR__.'/Database/' . $migFile 
                  => base_path('database/migrations/' . $migFile),
              __DIR__.'/Database/FallacySeeder.php' 
                  => base_path('database/seeds/FallacySeeder.php'), */
        ]);
        //$this->loadViewsFrom(__DIR__ . '/Views', 'survloop');
    }
}