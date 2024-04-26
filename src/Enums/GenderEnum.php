<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Enums;

enum GenderEnum: string
{
    case Unspecified = 'GENDER_UNSPECIFIED';
    case Female = 'GENDER_FEMALE';
    case Male = 'GENDER_MALE';
    case Diverse = 'GENDER_DIVERSE';
}
