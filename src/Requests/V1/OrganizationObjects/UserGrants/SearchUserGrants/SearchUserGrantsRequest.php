<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Thundev\Zitadel\Requests\Query;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants\Query as SearchUserGrantsQuery;

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
