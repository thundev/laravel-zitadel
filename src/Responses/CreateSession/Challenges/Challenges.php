<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\CreateSession\Challenges;

use Spatie\LaravelData\Data;

class Challenges extends Data
{
    public function __construct(
        public readonly string $otpSms,
        public readonly string $otpEmail,
        public readonly WebAuthN $webAuthN,
    ) {
    }
}
