<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\CreateSession\Challenges;

use Spatie\LaravelData\Data;

class WebAuthN extends Data
{
    public function __construct(
        public readonly array $publicKeyCredentialRequestOptions,
    ) {
    }
}
