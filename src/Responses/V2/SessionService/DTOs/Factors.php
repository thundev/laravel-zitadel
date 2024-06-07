<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Factors extends Data
{
    public function __construct(
        public User|Optional $user,
    ) {
    }
}
