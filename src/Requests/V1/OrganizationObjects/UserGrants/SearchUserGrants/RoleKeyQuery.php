<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapInputName(SnakeCaseMapper::class)]
class RoleKeyQuery extends Data
{
    public function __construct(
        public string $roleKey,
        public string $method,
    ) {
    }
}
