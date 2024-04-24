<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateHumanUser;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapInputName(SnakeCaseMapper::class)]
class Metadata extends Data
{
    public function __construct(
        public readonly string $key,
        public readonly string $value,
    ) {
    }
}
