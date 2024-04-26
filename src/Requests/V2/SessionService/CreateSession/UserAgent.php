<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\CreateSession;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class UserAgent extends Data
{
    public function __construct(
        public readonly string|Optional $fingerprintId,
        public readonly string|Optional $ip,
        public readonly string|Optional $description,
        public readonly array|Optional $header,
    ) {
    }
}
