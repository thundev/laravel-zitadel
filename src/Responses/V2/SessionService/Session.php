<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService;

use Spatie\LaravelData\Data;

class Session extends Data
{
    public function __construct(
        public string $id,
        public string $creationDate,
        public string $changeDate,
        public string $expirationDate,
    ) {
    }
}
