<?php

namespace Omatech\MagePluginCoupons;

use Illuminate\Support\ServiceProvider;
use Omatech\MagePluginCoupons\App\Providers\ViewServiceProvider;
use Omatech\MagePluginCoupons\App\Providers\HelperServiceProvider;
use Omatech\MagePluginCoupons\App\Providers\CommandServiceProvider;
use Omatech\MagePluginCoupons\App\Providers\RoutingServiceProvider;
use Omatech\MagePluginCoupons\App\Providers\MigrationServiceProvider;
use Omatech\MagePluginCoupons\App\Providers\MiddlewareServiceProvider;
use Omatech\MagePluginCoupons\App\Providers\ConfigurationServiceProvider;

class MagePluginCouponsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        if (in_array('mage-plugin-coupons', config('mage.plugins'))) {
            $this->app->register(CommandServiceProvider::class);
            $this->app->register(ConfigurationServiceProvider::class);
            $this->app->register(HelperServiceProvider::class);
            $this->app->register(MiddlewareServiceProvider::class);
            $this->app->register(MigrationServiceProvider::class);
            $this->app->register(RoutingServiceProvider::class);
            $this->app->register(ViewServiceProvider::class);
        }
    }
}
