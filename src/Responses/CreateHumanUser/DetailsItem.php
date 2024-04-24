<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\CreateHumanUser;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;

class DetailsItem extends Data
{
    public function __construct(
        public readonly string $sequence,
        #[WithCast(DateTimeInterfaceCast::class)]
        public readonly Carbon $changeDate,
        public readonly string $resourceOwner,
    ) {
    }
}
