<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateSession\Check;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Password extends Data
{
    public function __construct(
        public readonly string|Optional $password,
    ) {
    }
}
