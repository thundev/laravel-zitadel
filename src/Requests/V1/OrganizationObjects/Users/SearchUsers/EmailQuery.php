<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers;

use Spatie\LaravelData\Data;

class EmailQuery extends Data
{
    public function __construct(
        public string $emailAddress,
        public string $method,
    ) {
    }
}
