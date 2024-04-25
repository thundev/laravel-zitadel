<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateSession;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Requests\CreateSession\Challenge\Challenge;
use Thundev\Zitadel\Requests\CreateSession\Check\Check;

#[MapInputName(SnakeCaseMapper::class)]
class CreateSessionRequest extends Data
{
    public function __construct(
        public readonly Check|Optional $checks,
        public readonly array|Optional $metadata,
        public readonly Challenge|Optional $challenges,
        public readonly UserAgent|Optional $userAgent,
        public readonly string|Optional $lifetime,
    ) {
    }
}
