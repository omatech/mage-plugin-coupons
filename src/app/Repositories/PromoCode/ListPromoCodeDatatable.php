<?php


namespace Omatech\MagePluginCoupons\App\Repositories\PromoCode;

use Omatech\MagePluginCoupons\App\Repositories\PromoCodeBaseRepository;
use Yajra\DataTables\DataTables;

class ListPromoCodeDatatable extends PromoCodeBaseRepository
{
    public function make($columns =
     [
         'id',
         'type',
         'title',
         'code',
         'pct_discount',
         'amount_discount',
         'amount_discount_by_total_price',
         'pct_shipping_discount',
         'max_uses',
         'start_date',
         'end_date',
         'first_order_only',
         'one_use_only',
         'customer_one_use_only',
         'active',
         'action'])
    {
        $promocodes = $this->query()->select($columns)->orderBy('created_at', 'desc');

        return DataTables::of($promocodes)->make(true);
    }
}