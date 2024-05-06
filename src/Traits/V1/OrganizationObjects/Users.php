<?php

namespace Thundev\Zitadel\Traits\V1\OrganizationObjects;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\CreateMachineUserRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers\SearchUsersRequest;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUserSecret\CreateMachineUserSecretResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\SearchUsers\SearchUsersResponse;

trait Users
{
    /** @throws GuzzleException */
    public function searchUsers(SearchUsersRequest $request): SearchUsersResponse
    {
        $response = $this->request('POST', '/management/v1/users/_search', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return SearchUsersResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function createMachineUserSecret(string $userId): CreateMachineUserSecretResponse
    {
        $response = $this->request('PUT', "/management/v1/users/$userId/secret");

        return CreateMachineUserSecretResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function createMachineUser(CreateMachineUserRequest $request): CreateMachineUserResponse
    {
        $response = $this->request('POST', "/management/v1/users/machine", [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateMachineUserResponse::from(
            $this->decodeResponse($response)
        );
    }
}