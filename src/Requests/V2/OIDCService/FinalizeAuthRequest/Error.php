<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\OIDCService\FinalizeAuthRequest;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use Thundev\Zitadel\Enums\FinalizeAuthRequestErrorEnum;

#[MapInputName(SnakeCaseMapper::class)]
class Error extends Data
{
    public function __construct(
        #[WithCast(EnumCast::class)]
        public readonly FinalizeAuthRequestErrorEnum|Optional $error,
        public readonly string|Optional $errorUri,
        public readonly string|Optional $errorDescription,
    ) {
    }
}
