<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Enums;

enum ZitadelUserVerificationRequirementEnum: string
{
    case Unspecified = 'USER_VERIFICATION_REQUIREMENT_UNSPECIFIED';
    case Required = 'USER_VERIFICATION_REQUIREMENT_REQUIRED';
    case Preferred = 'USER_VERIFICATION_REQUIREMENT_PREFERRED';
    case Discouraged = 'USER_VERIFICATION_REQUIREMENT_DISCOURAGED';
}
