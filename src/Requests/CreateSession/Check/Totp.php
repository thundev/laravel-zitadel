<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateSession\Check;

use Spatie\LaravelData\Attributes\Validation\Size;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Totp extends Data
{
    public function __construct(
        #[Size(6)]
        public readonly string|Optional $code,
    ) {
    }
}
