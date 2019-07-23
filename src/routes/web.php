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
         $route->name('promocodes.')->prefix('promocodes')->group(function($route){
             $route->get('list', 'PromoCodeController@list')->name('list');
             $route->get('index', 'PromoCodeController@index')->name('index');
             $route->get('create', 'PromoCodeController@create')->name('create');
             $route->post('store', 'PromoCodeController@store')->name('store');
             $route->get('edit/{id}', 'PromoCodeController@edit')->name('edit');
             $route->put('update/{id}', 'PromoCodeController@update')->name('update');
             $route->get('destroy/{id}', 'PromoCodeController@delete')->name('destroy');
             $route->get('toggle/{id}', 'PromoCodeController@toggle')->name('toggle');
         });
     });
