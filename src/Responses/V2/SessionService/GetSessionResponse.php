<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService;

use Spatie\LaravelData\Data;

class GetSessionResponse extends Data
{
    public function __construct(
        public Session $session,
    ) {
    }
}
