<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\SetUserPassword;

use Spatie\LaravelData\Data;

class SetUserPasswordResponse extends Data
{
    public function __construct(
        public Details $details
    ) {
    }
}
