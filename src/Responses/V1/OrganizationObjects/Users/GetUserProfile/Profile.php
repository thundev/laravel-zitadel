<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\GetUserProfile;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Profile extends Data
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string|Optional $nickName,
        public string $displayName,
        public string|Optional $preferredLanguage,
        public string|Optional $gender,
        public string|Optional $avatarUrl,
    ) {
    }
}
