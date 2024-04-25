<?php

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Responses\CreateHumanUser\CreateHumanUserResponse;

trait HasSessionServiceRequests
{
    /** @throws GuzzleException */
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse
    {
        $response = $this->request('POST', $this->generateUrlApiV2('users/human'), [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateHumanUserResponse::from(
            $this->decodeResponse($response)
        );
    }
}