<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::namespace('Omatech\MagePluginCoupons\App\Http\Controllers')
     ->prefix(config('mage.prefix'))
     ->middleware('web')
     ->name('mage-plugin-coupons.')
     ->group(function ($route) {
         //routes
     });
