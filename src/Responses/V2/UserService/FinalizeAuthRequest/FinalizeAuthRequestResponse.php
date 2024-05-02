<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\FinalizeAuthRequest;

use Spatie\LaravelData\Data;

class FinalizeAuthRequestResponse extends Data
{
    public function __construct(
        public string $callbackUrl,
        public Details $details,
    ) {
    }
}
