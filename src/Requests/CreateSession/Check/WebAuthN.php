<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateSession\Check;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapInputName(SnakeCaseMapper::class)]
class WebAuthN extends Data
{
    public function __construct(
        public readonly array $credentialAssertionData,
    ) {
    }
}
