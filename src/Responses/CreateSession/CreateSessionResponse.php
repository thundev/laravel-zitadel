<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\CreateSession;

use Spatie\LaravelData\Data;

class CreateSessionResponse extends Data
{
    public function __construct(
        public Details $details,
        public string $sessionId,
        public string $clientSecret,
        public Details $challenges,
    ) {
    }
}
