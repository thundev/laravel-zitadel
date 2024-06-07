<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\DTOs\Check;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class IdpIntent extends Data
{
    public function __construct(
        public readonly string|Optional $idpIntentId,
        public readonly string|Optional $idpIntentToken,
    ) {
    }
}
