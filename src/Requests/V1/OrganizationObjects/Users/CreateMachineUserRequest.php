<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\Users;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class CreateMachineUserRequest extends Data
{
    public function __construct(
        public string $userName,
        public string $name,
        public string|Optional $description,
        public string|Optional $accessTokenType,
    ) {
    }
}
