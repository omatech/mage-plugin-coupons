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
    }
}
