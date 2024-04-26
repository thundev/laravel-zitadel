<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class GetSessionRequest extends Data
{
    public function __construct(
        public string $sessionId,
        public string|Optional $sessionToken,
    ) {
    }
}
