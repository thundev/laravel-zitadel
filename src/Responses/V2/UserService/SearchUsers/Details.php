<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\SearchUsers;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Details extends Data
{
    public function __construct(
        public string|Optional $totalResult,
        public string $viewTimestamp,
    ) {
    }
}
