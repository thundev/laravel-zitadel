<?php

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\CreateSession\CreateSessionRequest;
use Thundev\Zitadel\Responses\CreateSession\CreateSessionResponse;

trait HasOIDCServiceRequests
{
    /** @throws GuzzleException */
    public function createSession(CreateSessionRequest $request): CreateSessionResponse
    {
        $response = $this->request('POST', $this->generateUrlApiV2('sessions'), [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateSessionResponse::from(
            $this->decodeResponse($response)
        );
    }
}