<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateHumanUser;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Enums\ZitadelGenderEnum;

#[MapInputName(SnakeCaseMapper::class)]
class Profile extends Data
{
    public function __construct(
        public readonly string $givenName,
        public readonly string $familyName,
        public readonly string|Optional $nickName,
        public readonly string|Optional $displayName,
        public readonly string|Optional $preferredLanguage,
        #[WithCast(EnumCast::class)]
        public readonly ZitadelGenderEnum|Optional $gender,
    ) {
    }
}
