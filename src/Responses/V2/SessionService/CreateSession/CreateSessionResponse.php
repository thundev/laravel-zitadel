<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService\CreateSession;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Responses\V2\SessionService\DTOs\Challenges\Challenges;

class CreateSessionResponse extends Data
{
    public function __construct(
        public Details $details,
        public string $sessionId,
        public string $sessionToken,
        public Challenges|Optional $challenges,
    ) {
    }
}
