<?php

namespace Omatech\MagePluginCoupons\App\Repositories;

use Omatech\Mage\App\Repositories\BaseRepository;
use Omatech\LaravelPromoCodes\Models\Promocode;

abstract class PromocodeBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Promocode::class;
    }
}
