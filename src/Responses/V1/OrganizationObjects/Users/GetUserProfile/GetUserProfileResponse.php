<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\GetUserProfile;

use Spatie\LaravelData\Data;

class GetUserProfileResponse extends Data
{
    public function __construct(
        public Details $details,
        public Profile $profile,
    ) {
    }
}
