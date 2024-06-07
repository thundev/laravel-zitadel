<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\UserById;

use Spatie\LaravelData\Data;
use Thundev\Zitadel\Responses\V2\UserService\DTOs\User;

class UserByIdResponse extends Data
{
    public function __construct(
        public Details $details,
        public User $user,
    ) {
    }
}
