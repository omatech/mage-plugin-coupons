<?php

namespace Omatech\MagePluginCoupons\App\Http\Controllers;

use Omatech\LaravelPromoCodes\Facade\PromoCode;
use Omatech\MagePluginCoupons\App\Http\Requests\PromocodeUpdateRequest;
use Omatech\MagePluginCoupons\App\Http\Requests\PromocodeStoreRequest;
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
        return view('mage-plugin-coupons::pages.promocodes.create');
    }

    public function store(PromocodeStoreRequest $request)
    {
        Promocode::generate($request->all());

        return redirect()->route('mage-plugin-coupons.promocodes.index')->with('message', 'Promo code created successfully');
    }

    public function edit($id)
    {
        $promocode = PromoCode::find($id)->toArray();

        return view('mage-plugin-coupons::pages.promocodes.edit', compact('promocode'));
    }

    public function update(PromocodeUpdateRequest $request, $id)
    {
        Promocode::update($id, $request->all());

        return redirect()->route('mage-plugin-coupons.promocodes.index')->with('message', 'Promo code updated successfully');
    }

    public function delete()
    {
//        Promocode::
    }
}