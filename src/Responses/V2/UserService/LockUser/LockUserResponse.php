<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\LockUser;

use Spatie\LaravelData\Data;

class LockUserResponse extends Data
{
    public function __construct(
        public Details $details,
    ) {
    }
}
