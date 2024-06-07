<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\DTOs\Check;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class Check extends Data
{
    public function __construct(
        public readonly User|Optional $user,
        public readonly Password|Optional $password,
        public readonly WebAuthN|Optional $webAuthN,
        public readonly IdpIntent|Optional $idpIntent,
        public readonly Totp|Optional $totp,
        public readonly OtpSms|Optional $otpSms,
        public readonly OtpEmail|Optional $otpEmail,
    ) {
    }
}
