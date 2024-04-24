<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Facades;

use Illuminate\Support\Facades\Facade;
use Thundev\Zitadel\Contracts\ZitadelServiceContract;
use Thundev\Zitadel\ZitadelServiceFake;

/**
 * @mixin ZitadelServiceContract
 */
class ZitadelService extends Facade
{
    public static function fake(): ZitadelServiceFake
    {
        static::swap($fake = new ZitadelServiceFake());

        return $fake;
    }

    protected static function getFacadeAccessor(): string
    {
        return ZitadelServiceContract::class;
    }
}
