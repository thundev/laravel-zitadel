<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\FinalizeAuth;

use Spatie\LaravelData\Data;

class FinalizeAuthResponse extends Data
{
    public function __construct(
        public string $callbackUrl,
        public Details $details,

    ) {
    }
}
