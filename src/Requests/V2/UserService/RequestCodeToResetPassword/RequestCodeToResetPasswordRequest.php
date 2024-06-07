<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\UserService\RequestCodeToResetPassword;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class RequestCodeToResetPasswordRequest extends Data
{
    public function __construct(
        public readonly ReturnCode|Optional $returnCode,
    ) {
    }
}
