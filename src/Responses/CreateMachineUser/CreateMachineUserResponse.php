<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\CreateMachineUser;

use Spatie\LaravelData\Data;

class CreateMachineUserResponse extends Data
{
    public function __construct(
        public string $userId,
        public Details $details,
    ) {
    }
}
