<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUserSecret;

use Spatie\LaravelData\Data;

class CreateMachineUserSecretResponse extends Data
{
    public function __construct(
        public string $clientId,
        public string $clientSecret,
        public Details $details,
    ) {
    }
}
