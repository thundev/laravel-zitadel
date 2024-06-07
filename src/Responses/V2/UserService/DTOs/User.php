<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class User extends Data
{
    public function __construct(
        public string $id,
        public string $state,
        public string $userName,
        public Human|Optional $human,
    ) {
    }
}
