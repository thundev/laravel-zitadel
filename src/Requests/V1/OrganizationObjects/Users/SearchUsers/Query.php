<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class Query extends Data
{
    public function __construct(
        public UserNameQuery|Optional $userNameQuery,
        public EmailQuery|Optional $emailQuery,
        public OrQuery|Optional $orQuery,
    ) {
    }
}
