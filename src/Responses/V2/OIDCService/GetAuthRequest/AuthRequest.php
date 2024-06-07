<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Responses\V2\OIDCService\GetAuthRequest;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class AuthRequest extends Data
{
    public function __construct(
        public string $id,
        public string $creationDate,
        public string $clientId,
        public array $scope,
        public string $redirectUri,
        public array|Optional $prompt,
        public array|Optional $uiLocales,
        public string|Optional $loginHint,
        public string|Optional $maxAge,
        public string|Optional $hintUserId,
    ) {
    }
}
