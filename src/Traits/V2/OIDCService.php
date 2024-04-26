<?php

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V2\OIDCService\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Responses\V2\OIDCService\CreateHumanUser\CreateHumanUserResponse;

trait OIDCService
{
    /** @throws GuzzleException */
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse
    {
        $response = $this->request('POST', '/v2beta/users/human', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateHumanUserResponse::from(
            $this->decodeResponse($response)
        );
    }
}