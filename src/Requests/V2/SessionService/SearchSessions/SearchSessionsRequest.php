<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\SessionService\SearchSessions;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Thundev\Zitadel\Requests\Query;
use Thundev\Zitadel\Requests\V2\SessionService\SearchSessions\Query as SearchSessionQuery;

#[MapInputName(SnakeCaseMapper::class)]
class SearchSessionsRequest extends Data
{
    public function __construct(
        public Query $query,
        /** @var Collection<int, SearchSessionQuery> */
        public Collection $queries,
    ) {
    }
}
