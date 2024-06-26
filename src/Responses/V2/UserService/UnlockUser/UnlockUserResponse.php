<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\UnlockUser;

use Spatie\LaravelData\Data;

class UnlockUserResponse extends Data
{
    public function __construct(
        public Details $details,
    ) {
    }
}
