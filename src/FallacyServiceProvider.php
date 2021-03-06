<?php
namespace Fallacy;

use Illuminate\Support\ServiceProvider;

class FallacyServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        ServerProvider::class => FallacyServiceProvider::class,
    ];
    
    public function boot()
    {
        require __DIR__ . '/routes.php';
        $this->publishes([
              __DIR__.'/Views'   => base_path('resources/views/vendor/fallacy'),
              __DIR__.'/Models'  => base_path('app/Models'),
              __DIR__.'/Uploads' => base_path('storage/app/up/fallacy'),
              __DIR__.'/Database/2019_11_16_000000_create_fallacy_tables.php'
                  => base_path('database/migrations/2019_11_16_000000_create_fallacy_tables.php'),
              __DIR__.'/Database/FallacySeeder.php' 
                  => base_path('database/seeders/FallacySeeder.php')
        ]);
    }
}
