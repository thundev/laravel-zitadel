<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\UserService\CreateHumanUser;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class IdpLink extends Data
{
    public function __construct(
        public readonly string|Optional $idpId,
        public readonly string|Optional $userId,
        public readonly string|Optional $userName,
    ) {
    }
}
