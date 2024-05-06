<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUser;

use Spatie\LaravelData\Data;

class CreateMachineUserResponse extends Data
{
    public function __construct(
        public string $userId,
        public Details $details,
    ) {
    }
}
