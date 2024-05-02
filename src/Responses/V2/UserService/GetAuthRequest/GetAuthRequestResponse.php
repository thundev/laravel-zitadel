<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\GetAuthRequest;

use Spatie\LaravelData\Data;

class GetAuthRequestResponse extends Data
{
    public function __construct(
        public AuthRequest $authRequest,
    ) {
    }
}
