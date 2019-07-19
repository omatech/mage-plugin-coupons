<?php


namespace Omatech\MagePluginCoupons\App\Repositories\Promocode;

use Omatech\MagePluginCoupons\App\Repositories\PromocodeBaseRepository;
use Yajra\DataTables\DataTables;

class ListPromocodeDatatable extends PromocodeBaseRepository
{
    public function make($columns =
     [
         'id',
         'type',
         'title',
         'code',
         'pct_discount',
         'amount_discount',
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
        $promocodes = $this->query()->select($columns);

        return DataTables::of($promocodes)->make(true);
    }
}