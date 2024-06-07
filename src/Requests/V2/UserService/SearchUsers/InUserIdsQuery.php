<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\UserService\SearchUsers;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapInputName(SnakeCaseMapper::class)]
class InUserIdsQuery extends Data
{
    public function __construct(
        public array $userIds,
    ) {
    }
}
