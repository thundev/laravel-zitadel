<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\SearchUserGrants;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Thundev\Zitadel\Requests\SearchUserGrants\Query as SearchUserGrantsQuery;

#[MapInputName(SnakeCaseMapper::class)]
class SearchUserGrantsRequest extends Data
{
    public function __construct(
        public Query $query,
        /** @var Collection<int, SearchUserGrantsQuery> */
        public Collection $queries,
    ) {
    }
}
