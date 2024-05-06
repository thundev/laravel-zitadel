<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers\Query as SearchUsersQuery;

class OrQuery extends Data
{
    public function __construct(
        /** @var Collection<int, SearchUsersQuery> */
        public Collection $queries,
    ) {
    }
}
