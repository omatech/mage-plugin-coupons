<?php

namespace Omatech\MagePluginCoupons\App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->views();
    }

    /**
     * Register the application views.
     *
     * @return void
     */
    private function views()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'mage-plugin-coupons');

        $this->app['view']->addNamespace('mage-plugin-coupons',  __DIR__.'/../../resources/views');

        $this->publishes([
            __DIR__.'/../../resources/js' => public_path('vendor/mage-plugin-coupons/js'),
        ], 'public');
    }
}
