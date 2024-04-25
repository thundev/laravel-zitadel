<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Contracts\ZitadelServiceContract;
use Thundev\Zitadel\Traits\HasApiV1;
use Thundev\Zitadel\Traits\HasApiV2;

class ZitadelService extends ZitadelHttpClient implements ZitadelServiceContract
{
    use HasApiV1, HasApiV2;

    public function __construct(
        private readonly string $baseUri,
        private readonly string $apiToken,
    ) {
    }

    protected function getClientConfig(): array
    {
        $config = parent::getClientConfig();
        $config['base_uri'] = $this->baseUri;
        $config[RequestOptions::TIMEOUT] = 30;
        $config[RequestOptions::CONNECT_TIMEOUT] = 30;
        $config[RequestOptions::HEADERS] = [
            'Authorization' => "Bearer $this->apiToken",
            'Content-Type' => 'application/json',
        ];

        return $config;
    }
}
