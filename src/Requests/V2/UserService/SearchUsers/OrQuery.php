<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\UserService\SearchUsers;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Thundev\Zitadel\Requests\V2\UserService\SearchUsers\Query as SearchUsersQuery;

class OrQuery extends Data
{
    public function __construct(
        /** @var Collection<int, SearchUsersQuery> */
        public Collection $queries,
    ) {
    }
}
