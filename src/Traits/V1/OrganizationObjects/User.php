<?php

namespace Thundev\Zitadel\Traits\V1\OrganizationObjects;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\User\CreateMachineUserRequest;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\User\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\User\CreateMachineUserSecret\CreateMachineUserSecretResponse;

trait User
{
    /**  @throws GuzzleException */
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