<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\SearchUsers;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Responses\V2\UserService\DTOs\User;

class SearchUsersResponse extends Data
{
    public function __construct(
        public Details $details,
        /** @var Collection<int, User> */
        public Collection|Optional $result,
    ) {
    }
}
