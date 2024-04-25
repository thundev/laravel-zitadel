<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Traits;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\CreateMachineUserRequest;
use Thundev\Zitadel\Responses\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\CreateMachineUser\CreateMachineUserResponse;

trait HasCreateUserRequests
{
    /** @throws GuzzleException */
    public function createMachineUser(CreateMachineUserRequest $request): CreateMachineUserResponse
    {
        $response = $this->request('POST', 'management/v1/users/machine', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateMachineUserResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse
    {
        $response = $this->request('POST', 'v2beta/users/human', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateHumanUserResponse::from(
            $this->decodeResponse($response)
        );
    }
}
