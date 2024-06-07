<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Human extends Data
{
    public function __construct(
        public string $userId,
        public bool|Optional $passwordChangeRequired,
    ) {
    }
}
