<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\FinalizeAuthRequest;

use Spatie\LaravelData\Data;

class Details extends Data
{
    public function __construct(
        public string $sequence,
        public string $changeDate,
        public string $resourceOwner,
    ) {
    }
}
