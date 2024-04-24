<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateSession\Challenge;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Thundev\Zitadel\Enums\ZitadelUserVerificationRequirementEnum;

#[MapInputName(SnakeCaseMapper::class)]
class WebAuthN extends Data
{
    public function __construct(
        public readonly string $domain,
        #[WithCast(EnumCast::class)]
        public readonly ZitadelUserVerificationRequirementEnum $userVerificationRequirement,
    ) {
    }
}
