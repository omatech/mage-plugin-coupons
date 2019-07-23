<?php

namespace Omatech\MagePluginCoupons\App\Repositories;

use Omatech\Mage\App\Repositories\BaseRepository;
use Omatech\LaravelPromoCodes\Models\PromoCode;

abstract class PromoCodeBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return PromoCode::class;
    }
}
