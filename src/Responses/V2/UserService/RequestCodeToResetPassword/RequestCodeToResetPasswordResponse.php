<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\RequestCodeToResetPassword;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Responses\V2\UserService\UserById\Details;

class RequestCodeToResetPasswordResponse extends Data
{
    public function __construct(
        public Details $details,
        public string|Optional $verificationCode,
    ) {
    }
}
