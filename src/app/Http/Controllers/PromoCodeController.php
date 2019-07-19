<?php

namespace Omatech\MagePluginCoupons\App\Http\Controllers;

use Omatech\LaravelPromoCodes\Facade\PromoCode;
use Omatech\MagePluginCoupons\App\Repositories\Promocode\ListPromocodeDatatable;

class PromoCodeController extends Controller
{


    public function index()
    {
        return view('mage-plugin-coupons::pages.promocodes.index');
    }

    public function list(ListPromocodeDatatable $promocodeDatatable)
    {
        return $promocodeDatatable->make();
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}