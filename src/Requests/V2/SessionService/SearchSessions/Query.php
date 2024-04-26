<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\SearchSessions;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class Query extends Data
{
    public function __construct(
        public IdsQuery|Optional $idsQuery,
        public UserIdQuery|Optional $userIdQuery,
        public CreationDateQuery|Optional $creationDateQuery,
    ) {
    }
}
