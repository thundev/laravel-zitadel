<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Contracts\ZitadelServiceContract;
use Thundev\Zitadel\Requests\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Responses\CreateMachineUserSecret\CreateMachineUserSecretResponse;
use Thundev\Zitadel\Responses\SearchUserGrants\SearchUserGrantsResponse;
use Thundev\Zitadel\Traits\HasAuthorizeRequests;
use Thundev\Zitadel\Traits\HasCreateUserRequests;
use Thundev\Zitadel\Traits\HasSessionRequests;

class ZitadelService extends ZitadelHttpClient implements ZitadelServiceContract
{
    use HasAuthorizeRequests, HasCreateUserRequests, HasSessionRequests;

    public function __construct(
        private readonly string $baseUri,
        private readonly string $apiToken,
    ) {
    }

    /** @throws GuzzleException */
    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse
    {
        $response = $this->request('POST', 'users/grants/_search', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return SearchUserGrantsResponse::from(
            $this->decodeResponse($response)
        );
    }

    /**  @throws GuzzleException */
    public function createMachineUserSecret(string $userId): CreateMachineUserSecretResponse
    {
        $response = $this->request('PUT', "users/$userId/secret");

        return CreateMachineUserSecretResponse::from(
            $this->decodeResponse($response)
        );
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
