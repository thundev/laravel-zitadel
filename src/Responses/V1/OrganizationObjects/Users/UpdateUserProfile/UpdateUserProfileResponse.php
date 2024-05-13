<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\UpdateUserProfile;

use Spatie\LaravelData\Data;

class UpdateUserProfileResponse extends Data
{
    public function __construct(
        public Details $details,
    ) {
    }
}
