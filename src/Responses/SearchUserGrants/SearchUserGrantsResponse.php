<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\SearchUserGrants;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class SearchUserGrantsResponse extends Data
{
    public function __construct(
        public Details $details,
        /** @var Collection<int, ResultItem> */
        public Collection|Optional $result,
    ) {
    }
}
