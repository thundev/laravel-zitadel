<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Requests;

use Spatie\LaravelData\Data;

class Query extends Data
{
    public function __construct(
        public int $offset,
        public int $limit,
        public bool $asc,
    ) {
    }
}
