<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\DTOs\Challenge;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class Challenge extends Data
{
    public function __construct(
        public readonly WebAuthN|Optional $webAuthN,
        public readonly OtpSms|Optional $otpSms,
        public readonly OtpEmail|Optional $otpEmail,
    ) {
    }
}
