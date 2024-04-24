<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateSession\Challenge;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Requests\CreateSession\Challenge\OtpEmail\SendCode;

class OtpEmail extends Data
{
    public function __construct(
        public readonly array|Optional $returnCode,
        public readonly SendCode|Optional $message,
    ) {
    }
}
