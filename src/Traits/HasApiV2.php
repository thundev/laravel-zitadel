<?php

namespace Thundev\Zitadel\Traits;

use Thundev\Zitadel\Traits\V2\HasOIDCServiceRequests;
use Thundev\Zitadel\Traits\V2\HasSessionServiceRequests;
use Thundev\Zitadel\Traits\V2\HasUserServiceRequests;

trait HasApiV2
{
    use HasUserServiceRequests, HasSessionServiceRequests, HasOIDCServiceRequests;
    protected function generateUrlApiV2(string $url = ''): string
    {
        return '/v2beta/' . $url;
    }
}