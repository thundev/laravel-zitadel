<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\V2\UserService\ChangePassword;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class ChangePasswordRequest extends Data
{
    public function __construct(
        public readonly NewPassword $newPassword,
        public readonly string $currentPassword,
        public readonly string|Optional $verificationCode,
    ) {
    }
}
