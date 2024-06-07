<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService\DTOs;

use Spatie\LaravelData\Data;

class User extends Data
{
    public function __construct(
        public string $verifiedAt,
        public string $id,
        public string $loginName,
        public string $displayName,
        public string $organizationId,
    ) {
    }
}
