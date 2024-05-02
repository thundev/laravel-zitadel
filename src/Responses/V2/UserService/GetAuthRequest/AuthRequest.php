<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\UserService\GetAuthRequest;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class AuthRequest extends Data
{
    public function __construct(
        public string $id,
        public string $creationDate,
        public string $clientId,
        /** @var Collection<int, string> */
        public Collection $scope,
        public string $redirectUri,
        /** @var Collection<int, string> */
        public Collection|Optional $prompt,
        /** @var Collection<int, string> */
        public Collection|Optional $uiLocales,
        public string|Optional $loginHint,
        public string|Optional $maxAge,
        public string|Optional $hintUserId,
    ) {
    }
}
