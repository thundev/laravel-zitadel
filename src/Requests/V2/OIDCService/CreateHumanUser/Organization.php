<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\OIDCService\CreateHumanUser;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class Organization extends Data
{
    public function __construct(
        public readonly string|Optional $orgId,
        public readonly string|Optional $orgDomain,
    ) {
    }
}
