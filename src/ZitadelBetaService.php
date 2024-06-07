<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Contracts\ZitadelBetaServiceContract;

class ZitadelBetaService extends HttpClient implements ZitadelBetaServiceContract
{
    use Traits\V2;

    public function __construct(
        private readonly string $baseUri,
        private readonly string $apiToken,
    ) {
    }

    public static function create(string $baseUri, string $apiToken): self
    {
        return new self($baseUri, $apiToken);
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
