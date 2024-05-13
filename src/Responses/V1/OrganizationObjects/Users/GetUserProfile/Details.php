<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\GetUserProfile;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Details extends Data
{
    public function __construct(
        public string|Optional $sequence,
        public string|Optional $creationDate,
        public string|Optional $changeDate,
        public string|Optional $resourceOwner,
    ) {
    }
}
