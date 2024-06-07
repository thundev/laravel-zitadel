<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\ChangePassword;

use Spatie\LaravelData\Data;
use Thundev\Zitadel\Responses\V2\UserService\UserById\Details;

class ChangePasswordResponse extends Data
{
    public function __construct(
        public Details $details,
    ) {
    }
}
