<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests\CreateHumanUser;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapInputName(SnakeCaseMapper::class)]
class CreateHumanUserRequest extends Data
{
    public function __construct(
        public readonly string|Optional $userId,
        public readonly string|Optional $username,
        public readonly Organization|Optional $organization,
        public readonly Profile $profile,
        public readonly Email $email,
        public readonly Phone $phone,
        /** @var Collection<int, Metadata> */
        public readonly Collection $metadata,
        public readonly Password|Optional $password,
        public readonly Password|Optional $hashedPassword,
        /** @var Collection<int, IdpLink> */
        public readonly Collection|Optional $idpLinks,
    ) {
    }
}
