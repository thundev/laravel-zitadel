<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\SearchUsers;

use Spatie\LaravelData\Data;

class ResultItem extends Data
{
    public function __construct(
        public string $id,
        public string $state,
        public string $userName,
    ) {
    }
}
