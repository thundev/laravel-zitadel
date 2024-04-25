<?php

namespace Thundev\Zitadel\Traits\V1\OrganizationObjects;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\CreateMachineUserRequest;
use Thundev\Zitadel\Responses\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\CreateMachineUserSecret\CreateMachineUserSecretResponse;

trait HasUserRequests
{

    /**  @throws GuzzleException */
    public function createMachineUserSecret(string $userId): CreateMachineUserSecretResponse
    {
        $response = $this->request('PUT', $this->generateUrlApiV1("users/$userId/secret"));

        return CreateMachineUserSecretResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function createMachineUser(CreateMachineUserRequest $request): CreateMachineUserResponse
    {
        $response = $this->request('POST', $this->generateUrlApiV1("users/machine"), [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateMachineUserResponse::from(
            $this->decodeResponse($response)
        );
    }
}