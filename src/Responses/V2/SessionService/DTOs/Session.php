<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\SessionService\DTOs;

use Illuminate\Support\Optional;
use Spatie\LaravelData\Data;

class Session extends Data
{
    public function __construct(
        public string $id,
        public string $creationDate,
        public string $changeDate,
        public Factors $factors,
        public string|Optional $expirationDate,
    ) {
    }
}
