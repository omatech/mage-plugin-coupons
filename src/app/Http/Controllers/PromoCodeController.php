<?php

namespace Omatech\MagePluginCoupons\App\Http\Controllers;

use Omatech\LaravelPromoCodes\Facade\PromoCode;
use Omatech\MagePluginCoupons\App\Http\Requests\PromoCodeUpdateRequest;
use Omatech\MagePluginCoupons\App\Http\Requests\PromoCodeStoreRequest;
use Omatech\MagePluginCoupons\App\Repositories\PromoCode\ListPromoCodeDatatable;

class PromoCodeController extends Controller
{


    public function index()
    {
        return view('mage-plugin-coupons::pages.promocodes.index');
    }

    public function list(ListPromoCodeDatatable $promocodeDatatable)
    {
        return $promocodeDatatable->make();
    }

    public function create()
    {
        return view('mage-plugin-coupons::pages.promocodes.create');
    }

    public function store(PromoCodeStoreRequest $request)
    {
        PromoCode::generate($request->all());

        return redirect()->route('mage-plugin-coupons.promocodes.index')->with('message', 'Promo code created successfully');
    }

    public function edit($id)
    {
        $promocode = PromoCode::find($id)->toArray();

        return view('mage-plugin-coupons::pages.promocodes.edit', compact('promocode'));
    }

    public function update(PromoCodeUpdateRequest $request, $id)
    {
        PromoCode::update($id, $request->all());

        return redirect()->route('mage-plugin-coupons.promocodes.index')->with('message', 'Promo code updated successfully');
    }

    public function toggle()
    {
        PromoCode::setActive(!PromoCode::isActive());

        if(request()->ajax()) return response(['active' => PromoCode::isActive()]);

        $message = PromoCode::isActive() ? 'enabled' : 'disabled';

        return redirect()->route('mage-plugin-coupons.promocodes.index')->with('message', "Promo code $message successfully");
    }
}