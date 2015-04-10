<?php namespace Digitalkrikits\Picturecut;

use Illuminate\Support\ServiceProvider;

class PicturecutServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */

    public function register()
    {
        $this->app['picturecut'] = $this->app->share(function ($app) {
            return new Picturecut();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/assets' => public_path('packages/digitalkrikits/picturecut'),
            __DIR__ . '/views' => base_path('resources/views/vendor/digitalkrikits/picturecut'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/views', 'picturecut');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['picturecut'];
    }

}