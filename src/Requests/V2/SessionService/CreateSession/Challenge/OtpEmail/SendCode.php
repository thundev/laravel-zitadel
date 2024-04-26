<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\CreateSession\Challenge\OtpEmail;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class SendCode extends Data
{
    public function __construct(
        public readonly string|Optional $urlTemplate,
    ) {
    }
}
