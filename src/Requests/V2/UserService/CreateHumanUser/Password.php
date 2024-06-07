<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\UserService\CreateHumanUser;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class Password extends Data
{
    public function __construct(
        public readonly string $password,
        public readonly bool|Optional $changeRequired,
    ) {
    }
}
