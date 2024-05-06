<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\SearchUsers;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class SearchUsersResponse extends Data
{
    public function __construct(
        public Details $details,
        /** @var Collection<int, ResultItem> */
        public Collection|Optional $result,
    ) {
    }
}
