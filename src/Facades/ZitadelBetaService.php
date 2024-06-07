<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Facades;

use Illuminate\Support\Facades\Facade;
use Thundev\Zitadel\Contracts\ZitadelBetaServiceContract;
use Thundev\Zitadel\ZitadelBetaServiceFake;

/**
 * @mixin ZitadelBetaServiceContract
 */
class ZitadelBetaService extends Facade
{
    public static function fake(): ZitadelBetaServiceFake
    {
        static::swap($fake = new ZitadelBetaServiceFake());

        return $fake;
    }

    protected static function getFacadeAccessor(): string
    {
        return ZitadelBetaServiceContract::class;
    }
}
