<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\UserGrants\SearchUserGrants;

use Spatie\LaravelData\Data;

class ResultItem extends Data
{
    public function __construct(
        public string $id,
        public string $userId,
        public string $userName,
        public string $email,
        public array $roleKeys,
    ) {
    }
}
