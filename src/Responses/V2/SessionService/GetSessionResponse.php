<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService;

use Spatie\LaravelData\Data;
use Thundev\Zitadel\Responses\V2\SessionService\DTOs\Session;

class GetSessionResponse extends Data
{
    public function __construct(
        public Session $session,
    ) {
    }
}
