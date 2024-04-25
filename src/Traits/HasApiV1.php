<?php

namespace Thundev\Zitadel\Traits;

use Thundev\Zitadel\Traits\V1\OrganizationObjects\HasUserGrantRequests;
use Thundev\Zitadel\Traits\V1\OrganizationObjects\HasUserRequests;

trait HasApiV1
{
    use HasUserGrantRequests, HasUserRequests;

    protected function generateUrlApiV1(string $url = ''): string
    {
        return '/management/v1/' . $url;
    }
}