<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService\SearchSessions;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Responses\V2\SessionService\DTOs\Session;

class SearchSessionsResponse extends Data
{
    public function __construct(
        public Details $details,
        /** @var Collection<int, Session> */
        public Collection|Optional $sessions,
    ) {
    }
}
