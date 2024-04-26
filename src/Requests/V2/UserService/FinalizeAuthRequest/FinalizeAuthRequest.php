<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\UserService\FinalizeAuthRequest;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FinalizeAuthRequest extends Data
{
    public function __construct(
        public readonly Session|Optional $session,
        public readonly Error|Optional $error,
    ) {
    }
}
