<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Utils;
use Psr\Http\Message\ResponseInterface;

abstract class HttpClient
{
    private ?ClientInterface $client = null;

    /**
     * @throws GuzzleException
     */
    public function request(string $method, string $uri = '', array $options = []): ResponseInterface
    {
        return $this->getClient()->request($method, $uri, $options);
    }

    public function decodeResponse(ResponseInterface $response, bool $assoc = true): mixed
    {
        return Utils::jsonDecode((string)$response->getBody(), $assoc);
    }

    protected function getClient(): ClientInterface
    {
        if ($this->client === null) {
            $this->client = new Client($this->getClientConfig());
        }

        return $this->client;
    }

    protected function getClientConfig(): array
    {
        return [];
    }
}
