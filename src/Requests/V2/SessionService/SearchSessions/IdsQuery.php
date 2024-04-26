<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\SearchSessions;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapInputName(SnakeCaseMapper::class)]
class IdsQuery extends Data
{
    public function __construct(
        public array $ids,
    ) {
    }
}
