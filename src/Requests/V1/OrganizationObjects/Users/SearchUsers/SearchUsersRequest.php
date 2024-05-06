<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Thundev\Zitadel\Requests\Query;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers\Query as SearchUsersQuery;

#[MapInputName(SnakeCaseMapper::class)]
class SearchUsersRequest extends Data
{
    public function __construct(
        public Query $query,
        /** @var Collection<int, SearchUsersQuery> */
        public Collection $queries,
    ) {
    }
}
