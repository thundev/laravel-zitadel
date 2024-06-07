<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Facades;

use Illuminate\Support\Facades\Facade;
use Thundev\Zitadel\Contracts\ZitadelStableServiceContract;
use Thundev\Zitadel\ZitadelStableServiceFake;

/**
 * @mixin ZitadelStableServiceContract
 */
class ZitadelStableService extends Facade
{
    public static function fake(): ZitadelStableServiceFake
    {
        static::swap($fake = new ZitadelStableServiceFake());

        return $fake;
    }

    protected static function getFacadeAccessor(): string
    {
        return ZitadelStableServiceContract::class;
    }
}
