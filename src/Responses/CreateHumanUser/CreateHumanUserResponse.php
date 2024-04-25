<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\CreateHumanUser;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CreateHumanUserResponse extends Data
{
    public function __construct(
        public readonly string $userId,
        public readonly Details $details,
        public readonly string|Optional $emailCode,
        public readonly string|Optional $phoneCode,
    ) {
    }
}
