<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService\UpdateSession;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Responses\V2\SessionService\DTOs\Challenges\Challenges;

class UpdateSessionResponse extends Data
{
    public function __construct(
        public Details $details,
        public string $sessionToken,
        public Challenges|Optional $challenges,
    ) {
    }
}
