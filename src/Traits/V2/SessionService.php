<?php

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V2\SessionService\CreateSession\CreateSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\GetSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\SearchSessions\SearchSessionsRequest;
use Thundev\Zitadel\Responses\V2\SessionService\CreateSession\CreateSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\GetSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\SearchSessions\SearchSessionsResponse;

trait SessionService
{
    /** @throws GuzzleException */
    public function searchSessions(SearchSessionsRequest $request): SearchSessionsResponse
    {
        $response = $this->request('POST', '/v2beta/sessions/search', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return SearchSessionsResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function getSession(GetSessionRequest $request): GetSessionResponse
    {
        $response = $this->request('GET', "/v2beta/sessions/$request->sessionId", [
            RequestOptions::QUERY => $request->only('sessionToken')->toArray(),
        ]);

        return GetSessionResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function createSession(CreateSessionRequest $request): CreateSessionResponse
    {
        $response = $this->request('POST', '/v2beta/sessions', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateSessionResponse::from(
            $this->decodeResponse($response)
        );
    }
}