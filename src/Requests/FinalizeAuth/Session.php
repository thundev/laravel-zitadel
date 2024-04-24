<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\FinalizeAuth;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class Session extends Data
{
    public function __construct(
        public readonly string|Optional $sessionId,
        public readonly string|Optional $sessionToken,
    ) {
    }
}
