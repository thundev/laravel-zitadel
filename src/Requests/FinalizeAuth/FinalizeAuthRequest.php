<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\FinalizeAuth;

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
