<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\UserService\ChangePassword;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapInputName(SnakeCaseMapper::class)]
class NewPassword extends Data
{
    public function __construct(
        public readonly string $password,
        public readonly bool $changeRequired,
    ) {
    }
}
