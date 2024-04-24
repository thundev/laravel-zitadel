<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateHumanUser;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class Email extends Data
{
    public function __construct(
        public readonly string $email,
        public readonly array|Optional $returnCode,
        public readonly bool|Optional $isVerified,
        public readonly SendCode|Optional $sendCode,
    ) {
    }
}
