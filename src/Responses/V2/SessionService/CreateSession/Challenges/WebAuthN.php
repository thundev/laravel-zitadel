<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService\CreateSession\Challenges;

use Spatie\LaravelData\Data;

class WebAuthN extends Data
{
    public function __construct(
        public readonly array $publicKeyCredentialRequestOptions,
    ) {
    }
}
