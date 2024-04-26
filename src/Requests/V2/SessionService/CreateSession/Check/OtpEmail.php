<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\CreateSession\Check;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class OtpEmail extends Data
{
    public function __construct(
        public readonly string|Optional $code,
    ) {
    }
}
