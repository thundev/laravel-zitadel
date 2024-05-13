<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\Users;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class UpdateUserProfileRequest extends Data
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string|Optional $nickName,
        public string $displayName,
        public string|Optional $preferredLanguage,
        public string|Optional $gender,
    ) {
    }
}
