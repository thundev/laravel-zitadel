<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Thundev\Zitadel\Contracts\ZitadelServiceContract;

class ZitadelServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->app->singleton(ZitadelServiceContract::class, function() {
            return new ZitadelService(
                config('zitadel.base_uri'),
                config('zitadel.api_token'),
            );
        });
    }

    public function boot(): void
    {
        $configPath = __DIR__ . '/../../config/zitadel.php';

        $this->publishes([$configPath => config_path('zitadel.php')], 'zitadel-config');
    }

    public function provides(): array
    {
        return [
            ZitadelServiceContract::class,
        ];
    }
}
