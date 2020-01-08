<?php

namespace Chuckbe\ChuckcmsTemplateColorlibIdeal;

use Chuckbe\ChuckcmsTemplateColorlibIdeal\Commands\PublishColorlibIdeal;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateColorlibIdealServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishColorlibIdeal::class,
            ]);
        }
        
        //php artisan vendor:publish --tag=chuckcms-template-colorlib-ideal-public --force
        $this->publishes([
            __DIR__.'/../assets' => public_path('chuckbe/chuckcms-template-colorlib-ideal'),
        ], 'chuckcms-template-colorlib-ideal-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-colorlib-ideal.php' => config_path('chuckcms-template-colorlib-ideal'),
        // ], 'chuckcms-template-colorlib-ideal-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-colorlib-ideal');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-colorlib-ideal.php', 'chuckcms-template-colorlib-ideal-config'
        // );
    }
}
