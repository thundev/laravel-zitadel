<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants;

use Spatie\LaravelData\Data;

class UserTypeQuery extends Data
{
    public function __construct(
        public string $type,
    ) {
    }
}
